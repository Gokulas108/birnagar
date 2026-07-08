<?php

use App\Models\Donation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;

uses(RefreshDatabase::class);

beforeEach(function () {
    config([
        'services.doubletick.api_key' => 'test-key',
        'services.doubletick.waba_number' => '919002977288',
        'services.doubletick.language' => 'en',
        'services.doubletick.receipt_template' => 'general_donation_receipt',
        'services.pdf.receipt_url' => 'https://pdf.example.test/generate-reciept',
    ]);

});

// Each test registers its own Http::fake() so a test can choose a failing
// Doubletick response without the catch-all here always winning (the first
// registered stub wins, so a beforeEach catch-all can't be overridden).

function completeWebhook(Donation $donation): void
{
    test()->postJson(route('payment.webhook'), [
        'merchantTxnNo' => $donation->merchant_txn_no,
        'responseCode' => '0000',
        'txnID' => 'TXN-999',
        'paymentID' => 'PAY-999',
        'paymentDateTime' => '2026-07-07 10:30:00',
        'respDescription' => 'Success',
    ])->assertOk();
}

it('sends the general_donation_receipt template with the receipt PDF for a completed web donation', function () {
    Http::fake(['*' => Http::response(['ok' => true], 200)]);

    $donation = Donation::create([
        'name' => 'Test Donor',
        'email' => 'donor@example.com',
        'mobile' => '919876543210',
        'amount' => '15000.00',
        'merchant_txn_no' => 'DONTEST123',
        'status' => 'initiated',
        'source' => 'web',
        'donation_type' => 'General Donation',
    ]);

    completeWebhook($donation);

    expect($donation->fresh()->status)->toBe('success');
    expect($donation->fresh()->receipt_sent)->toBeTrue();

    Http::assertSent(function ($request) use ($donation) {
        if ($request->url() !== 'https://public.doubletick.io/v2/whatsapp/message/template') {
            return false;
        }

        $content = $request->data()['messages'][0]['content'];
        $templateData = $content['templateData'];

        $query = [];
        parse_str(parse_url($templateData['header']['mediaUrl'], PHP_URL_QUERY), $query);

        return $request['messages'][0]['to'] === '919876543210'
            && $content['templateName'] === 'general_donation_receipt'
            && $content['language'] === 'en'
            && $templateData['header']['type'] === 'DOCUMENT'
            && str_contains($templateData['header']['mediaUrl'], 'pdf.example.test/generate-reciept')
            && ($query['receipt_no'] ?? null) === 'PG'.$donation->id
            && $templateData['header']['filename'] === 'Donation-Receipt.pdf'
            && $templateData['body']['placeholders'][0] === ['name' => 'Test Donor']
            && $templateData['body']['placeholders'][1] === ['amount' => '15,000'];
    });
});

it('marks receipt_sent false when Doubletick rejects the send', function () {
    Http::fake(['*' => Http::response('nope', 500)]);

    $donation = Donation::create([
        'name' => 'Test Donor',
        'email' => 'donor@example.com',
        'mobile' => '919876543210',
        'amount' => '15000.00',
        'merchant_txn_no' => 'DONTEST127',
        'status' => 'initiated',
        'source' => 'web',
        'donation_type' => 'General Donation',
    ]);

    completeWebhook($donation);

    expect($donation->fresh()->status)->toBe('success');
    expect($donation->fresh()->receipt_sent)->toBeFalse();
});

it('passes donation_type as the receipt notes and spells the amount in words', function () {
    Http::fake(['*' => Http::response(['ok' => true], 200)]);

    $donation = Donation::create([
        'name' => 'Abhay Charan',
        'email' => 'abhay@example.com',
        'mobile' => '919000000000',
        'amount' => '15000.00',
        'merchant_txn_no' => 'DONTEST124',
        'status' => 'initiated',
        'source' => 'web',
        'donation_type' => 'Tulasi Seva',
    ]);

    completeWebhook($donation);

    Http::assertSent(function ($request) {
        if ($request->url() !== 'https://public.doubletick.io/v2/whatsapp/message/template') {
            return false;
        }

        $mediaUrl = $request->data()['messages'][0]['content']['templateData']['header']['mediaUrl'];
        $query = [];
        parse_str(parse_url($mediaUrl, PHP_URL_QUERY), $query);

        return ($query['notes'] ?? null) === 'Tulasi Seva'
            && ($query['amount_in_words'] ?? null) === 'Fifteen Thousand Only'
            && ($query['mode_of_payment'] ?? null) === 'Online';
    });
});

it('does not send a WhatsApp receipt for api (wall) donations', function () {
    Http::fake(['*' => Http::response(['ok' => true], 200)]);

    $donation = Donation::create([
        'name' => 'Wall Donor',
        'email' => 'wall@example.com',
        'mobile' => '919876543210',
        'amount' => '1000.00',
        'merchant_txn_no' => 'DONTEST125',
        'status' => 'initiated',
        'source' => 'api_abc123',
    ]);

    completeWebhook($donation);

    Http::assertNotSent(fn ($request) => str_contains($request->url(), 'message/template'));
    expect($donation->fresh()->receipt_sent)->toBeNull();
});

it('does not send a WhatsApp receipt for a failed donation', function () {
    Http::fake(['*' => Http::response(['ok' => true], 200)]);

    $donation = Donation::create([
        'name' => 'Test Donor',
        'email' => 'donor@example.com',
        'mobile' => '919876543210',
        'amount' => '15000.00',
        'merchant_txn_no' => 'DONTEST126',
        'status' => 'initiated',
        'source' => 'web',
    ]);

    test()->postJson(route('payment.webhook'), [
        'merchantTxnNo' => $donation->merchant_txn_no,
        'responseCode' => '9999',
        'respDescription' => 'Failed',
    ])->assertOk();

    expect($donation->fresh()->status)->toBe('failed');
    Http::assertNotSent(fn ($request) => str_contains($request->url(), 'message/template'));
    expect($donation->fresh()->receipt_sent)->toBeNull();
});
