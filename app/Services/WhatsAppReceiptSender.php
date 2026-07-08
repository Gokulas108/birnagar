<?php

namespace App\Services;

use App\Models\Donation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Sends a WhatsApp donation receipt to the donor once a web donation completes.
 *
 * Builds a receipt-PDF URL against pdf-server and sends the Doubletick
 * "general_donation_receipt" template with that PDF attached as a DOCUMENT header.
 * Fully best-effort: any failure is logged and swallowed so it never breaks the
 * payment webhook/callback that triggers it.
 */
class WhatsAppReceiptSender
{
    private const TEMPLATE_URL = 'https://public.doubletick.io/v2/whatsapp/message/template';

    public function send(Donation $donation): void
    {
        try {
            $apiKey = config('services.doubletick.api_key');

            if (empty($apiKey) || empty($donation->mobile)) {
                Log::warning('WhatsApp receipt skipped (missing api key or mobile)', [
                    'merchant_txn_no' => $donation->merchant_txn_no,
                ]);

                return;
            }

            $response = Http::timeout(15)
                ->withHeaders([
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'Authorization' => $apiKey,
                ])
                ->post(self::TEMPLATE_URL, [
                    'messages' => [[
                        'to' => $this->toWhatsAppNumber($donation),
                        'from' => config('services.doubletick.waba_number'),
                        'content' => [
                            'templateName' => config('services.doubletick.receipt_template'),
                            'language' => config('services.doubletick.language'),
                            'templateData' => [
                                'header' => [
                                    'type' => 'DOCUMENT',
                                    'mediaUrl' => $this->buildReceiptUrl($donation),
                                    'filename' => 'Donation-Receipt.pdf',
                                ],
                                'body' => [
                                    'placeholders' => [
                                        ['name' => $donation->name],
                                        ['amount' => $this->amountForTemplate($donation->amount)],
                                    ],
                                ],
                            ],
                        ],
                    ]],
                ]);

            if ($response->failed()) {
                $this->markReceiptSent($donation, false);

                Log::error('WhatsApp receipt send failed', [
                    'merchant_txn_no' => $donation->merchant_txn_no,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
            } else {
                $this->markReceiptSent($donation, true);

                Log::info('WhatsApp receipt sent', [
                    'merchant_txn_no' => $donation->merchant_txn_no,
                ]);
            }
        } catch (\Throwable $e) {
            $this->markReceiptSent($donation, false);

            Log::error('WhatsApp receipt dispatch threw', [
                'merchant_txn_no' => $donation->merchant_txn_no,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Record whether the WhatsApp receipt was delivered. Best-effort: a failure to
     * persist this flag must never bubble up into the payment callback/webhook.
     */
    private function markReceiptSent(Donation $donation, bool $sent): void
    {
        try {
            $donation->receipt_sent = $sent;
            $donation->save();
        } catch (\Throwable $e) {
            Log::error('Failed to persist receipt_sent flag', [
                'merchant_txn_no' => $donation->merchant_txn_no,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Digits-only WhatsApp number. Web donations already carry the country code
     * (merged into `mobile` at submission time); this defensively prefixes 91 for
     * any legacy/bare 10-digit record.
     */
    private function toWhatsAppNumber(Donation $donation): string
    {
        $digits = preg_replace('/\D/', '', (string) $donation->mobile);

        if (strlen($digits) <= 10) {
            $digits = '91'.$digits;
        }

        return $digits;
    }

    private function buildReceiptUrl(Donation $donation): string
    {
        $amount = (float) $donation->amount;

        $address = collect([$donation->address, $donation->city, $donation->state])
            ->filter()
            ->implode(', ');

        $params = [
            'receipt_no' => 'PG'.$donation->id,
            'receipt_date' => now()->format('Y-m-d'),
            'legal_name' => $donation->name,
            'address' => $address,
            'pincode' => $donation->pincode ?? '',
            'phone_no' => $this->toWhatsAppNumber($donation),
            'email' => $donation->email ?? '',
            'payment_reference' => $donation->txn_id ?? $donation->payment_id ?? '',
            'pan_no' => $donation->pan ?? '',
            'payment_date' => $donation->payment_datetime
                ? substr((string) $donation->payment_datetime, 0, 10)
                : $donation->created_at?->format('Y-m-d'),
            'amount' => '₹'.number_format($amount).'/-',
            'amount_in_words' => $this->numberToWords($amount).' Only',
            'mode_of_payment' => 'Online',
            'notes' => $donation->donation_type ?: 'General Donation',
        ];

        return config('services.pdf.receipt_url').'?'.http_build_query($params);
    }

    /**
     * Amount for the template body placeholder: Indian-grouped digits, no symbol
     * (the template itself renders the ₹). e.g. 15000 -> "15,000".
     */
    private function amountForTemplate($amount): string
    {
        return number_format((float) $amount);
    }

    /**
     * Spell out a whole-rupee amount, matching the-wall-next receipt wording
     * (Million / Thousand / Hundred). Ported from lib/receipts/urls.ts.
     */
    private function numberToWords(float $value): string
    {
        $value = (int) floor($value);

        if ($value === 0) {
            return 'Zero';
        }

        $parts = [];
        $millions = intdiv($value, 1_000_000);
        $thousands = intdiv($value % 1_000_000, 1_000);
        $remainder = $value % 1_000;

        if ($millions) {
            $parts[] = $this->chunkToWords($millions).' Million';
        }
        if ($thousands) {
            $parts[] = $this->chunkToWords($thousands).' Thousand';
        }
        if ($remainder) {
            $parts[] = $this->chunkToWords($remainder);
        }

        return implode(' ', $parts);
    }

    private function chunkToWords(int $num): string
    {
        $ones = [
            'Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine',
            'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen',
            'Seventeen', 'Eighteen', 'Nineteen',
        ];
        $tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

        if ($num < 20) {
            return $ones[$num];
        }

        if ($num < 100) {
            $ten = intdiv($num, 10);
            $rest = $num % 10;

            return $rest ? $tens[$ten].' '.$ones[$rest] : $tens[$ten];
        }

        $hundred = intdiv($num, 100);
        $rest = $num % 100;

        return $rest
            ? $ones[$hundred].' Hundred '.$this->chunkToWords($rest)
            : $ones[$hundred].' Hundred';
    }
}
