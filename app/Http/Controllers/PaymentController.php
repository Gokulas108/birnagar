<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    private $merchantId;
    private $aggregatorId;
    private $secretKey;
    private $initiateSaleUrl;
    private $statusCheckUrl;
    private $refundUrl;

    public function __construct()
    {
        $this->merchantId     = config('services.icici.merchant_id');
        $this->aggregatorId   = config('services.icici.aggregator_id');
        $this->secretKey      = config('services.icici.secret_key');
        $this->initiateSaleUrl = config('services.icici.initiate_sale_url');
    }

    // Show donation form
    public function showDonationForm()
    {
        return view('pages.donate');
    }

    // Initiate sale
    public function initiateSale(Request $request)
    {
        $isApi = $request->boolean('api', false);

        Log::info('Initiating Sale', ['request' => $request->all(), 'is_api' => $isApi]);

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'mobile'   => 'required|string|max:15',
            'amount'   => 'required|numeric|min:1',
            'pan'      => 'nullable|string|max:10',
            'address'  => 'nullable|string|max:500',
            'city'     => 'nullable|string|max:255',
            'state'    => 'nullable|string|max:255',
            'pincode'  => 'nullable|string|max:10',
        ]);

        $merchantTxnNo = 'DON' . now()->format('YmdHis') . rand(100, 999);
        $amount  = number_format($request->amount, 2, '.', '');
        $txnDate = now()->format('YmdHis');

        $donation = Donation::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'amount' => $amount,
            'merchant_txn_no' => $merchantTxnNo,
            'status' => 'initiated',
            'pan' => $request->pan,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'source' => $isApi ? $request->api_key : 'web',
            'pincode' => $request->pincode
        ]);

        $hashText = ($request->addlParam1 ?? '') .
                    ($request->addlParam2 ?? '') .
                    $this->aggregatorId .
                    $amount .
                    '356' .
                    $request->email .
                    $request->name .
                    $this->merchantId .
                    $merchantTxnNo .
                    '0' .
                    route('payment.advice') .
                    'SALE' .
                    $txnDate;

        $secureHash = $this->generateSecureHash($hashText);

        $payload = [
            "merchantId"      => $this->merchantId,
            "aggregatorID"    => $this->aggregatorId,
            "merchantTxnNo"   => $merchantTxnNo,
            "amount"          => $amount,
            "currencyCode"    => "356",
            "payType"         => "0",
            "customerEmailID" => $request->email,
            "transactionType" => "SALE",
            "returnURL"       => route('payment.advice'),
            "txnDate"         => $txnDate,
            "customerName"    => $request->name,
            "secureHash"      => $secureHash
        ];

        $response = $this->curlPost($this->initiateSaleUrl, $payload);


        if (!$response || !isset($response['redirectURI'])) {
            Log::error('Invalid Gateway Response', ['response' => $response]);
            return back()->withErrors(['msg' => 'Payment gateway error.']);
        }

        $redirectUrl = $response['redirectURI'] . '?tranCtx=' . $response['tranCtx'];

        // Normal Laravel web flow
        // return redirect($redirectUrl);
        return view('payment.auto_redirect', [
        'redirectUrl' => $redirectUrl
    ]);
    }

    /**
     * 🔑 Shared logic (Idempotent - used by BOTH webhook & callback)
     */
    private function updateDonationFromGateway(Request $request)
    {
        $responseCode = $request->responseCode ?? '';
        $txnStatus = ($responseCode === '0000') ? 'success' : 'failed';

        $donation = Donation::where('merchant_txn_no', $request->merchantTxnNo)->first();

        if (!$donation) {
            Log::error('Unknown transaction', [
                'merchant_txn_no' => $request->merchantTxnNo,
                'payload' => $request->all()
            ]);
            return null;
        }

        // Do not downgrade a successful payment on duplicate/late callbacks.
        if ($donation->status === 'success') {
            Log::info('Duplicate update skipped', [
                'merchant_txn_no' => $donation->merchant_txn_no,
                'existing_status' => $donation->status,
                'incoming_status' => $txnStatus,
                'hit_from' => request()->path()
            ]);
            return $donation;
        }

        // Skip no-op duplicates for already failed records.
        if ($donation->status === 'failed' && $txnStatus === 'failed') {
            Log::info('Duplicate failed update skipped', [
                'merchant_txn_no' => $donation->merchant_txn_no,
                'existing_status' => $donation->status,
                'incoming_status' => $txnStatus,
                'hit_from' => request()->path()
            ]);
            return $donation;
        }

        // ✅ Update donation
        $donation->status = $txnStatus;
        $donation->txn_id = $request->txnID ?? null;
        $donation->payment_id = $request->paymentID ?? null;
        $donation->auth_code = $request->authCode ?? null;
        $donation->payment_mode = $request->paymentMode ?? null;
        $donation->response_code = $responseCode;
        $donation->response_description = $request->respDescription ?? null;
        $donation->payment_datetime = $request->paymentDateTime ?? null;

        $donation->save();

        // Notify API client system after status update for API initiated flows.
        if ($donation->source && Str::startsWith($donation->source, 'api_')) {
            try {
                Http::timeout(10)
                    ->acceptJson()
                    ->post('https://wall.birnagar.org/api/webhooks/payment', [
                        'api_key' => $donation->source,
                        'txn_id' => $donation->txn_id,
                        'status' => $donation->status,
                    ]);
            } catch (\Throwable $e) {
                Log::error('Payment webhook dispatch failed', [
                    'merchant_txn_no' => $donation->merchant_txn_no,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        Log::info('Donation updated successfully', [
            'merchant_txn_no' => $donation->merchant_txn_no,
            'status' => $txnStatus,
            'updated_from' => request()->path()
        ]);

        return $donation;
    }

    /**
     * 🔔 WEBHOOK (PRIMARY - Server to Server)
     */
    public function handleWebhook(Request $request)
    {
        Log::info('Webhook Received', [
            'payload' => $request->all()
        ]);

        $this->updateDonationFromGateway($request);

        // Always return success quickly
        return response()->json([
            'status' => 'OK'
        ]);
    }

    /**
     * 🌐 CALLBACK (SECONDARY - Browser redirect)
     */
    public function handleCallback(Request $request)
    {
        Log::info('Callback Received', [
            'payload' => $request->all()
        ]);

        $donation = $this->updateDonationFromGateway($request);

        if (!$donation) {
            return view('donation.callback_error');
        }

        $txnStatus = strtoupper($donation->status);

        // Detect API flow
        $isApi = $donation->source && Str::startsWith($donation->source, 'api_');

        if ($isApi) {
            return redirect()->away(
                'https://wall.birnagar.org/payment/result?' . http_build_query([
                    'status'   => $donation->status,
                    'txnID'    => $donation->txn_id,
                    'amount'   => $donation->amount,
                    'message'  => $donation->response_description,
                    'api_key'  => $donation->source,
                ])
            );
        }

        return view('donation.callback', [
            'status' => $txnStatus,
            'txnID' => $donation->txn_id,
            'amount' => $donation->amount,
            'respDescription' => $donation->response_description
        ]);
    }


    // ICICI callback
    // public function handleCallback(Request $request)
    // {
    //     Log::info('Payment Callback Received', ['request' => $request->all()]);

    //     $responseCode = $request->responseCode ?? '';
    //     $txnStatus = ($responseCode === '0000') ? 'SUCCESS' : 'FAILED';

    //     $donation = Donation::where('merchant_txn_no', $request->merchantTxnNo)->first();

    //     if ($donation) {
    //         $donation->status = strtolower($txnStatus);
    //         $donation->txn_id = $request->txnID ?? null;
    //         $donation->payment_id = $request->paymentID ?? null;
    //         $donation->auth_code = $request->authCode ?? null;
    //         $donation->payment_mode = $request->paymentMode ?? null;
    //         $donation->response_code = $responseCode;
    //         $donation->response_description = $request->respDescription ?? null;
    //         $donation->payment_datetime = $request->paymentDateTime ?? null;
    //         $donation->save();
    //     } else {
    //         Log::error('Callback for unknown transaction', ['merchant_txn_no' => $request->merchantTxnNo]);
    //     }

    //     // Detect API flow via query param (we'll pass this)
    //     $isApi = $donation && $donation->source && Str::startsWith($donation->source, 'api_');

    //     if ($isApi) {
    //         return redirect()->away(
    //             'https://wall.birnagar.org/payment/result?' . http_build_query([
    //                 'status' => strtolower($txnStatus),
    //                 'txnID' => $request->txnID ?? null,
    //                 'amount' => $donation->amount ?? null,
    //                 'message' => $request->respDescription ?? null,
    //                 'api_key' => $donation->source, // pass back the api key for client-side correlation
    //             ])
    //         );
    //     }

    //     return view('donation.callback', [
    //         'status' => $txnStatus,
    //         'txnID' => $request->txnID ?? null,
    //         'amount' => $donation->amount ?? null,
    //         'respDescription' => $request->respDescription ?? null
    //     ]);
    // }

    public function redirectToGateway(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'api_key' => ['required', 'string', 'starts_with:api_'],
        ]);

        if ($validator->fails()) {
            return redirect()->away(
                'https://wall.birnagar.org/payment/result?' . http_build_query([
                    'status' => 'failed',
                    'message' => 'Invalid Transaction details',
                ])
            );
        }

        // Force api flag
        $request->merge([
            'api' => true,
        ]);

        return $this->initiateSale($request);
    }

    // // Status Check API
    // public function checkStatus($merchantTxnNo)
    // {
    //     $payload = [
    //         "merchantId"      => $this->merchantId,
    //         "aggregatorID"    => $this->aggregatorId,
    //         "merchantTxnNo"   => $merchantTxnNo,
    //         "originalTxnNo"   => $merchantTxnNo,
    //         "transactionType" => "STATUS",
    //         "secureHash"      => $this->generateSecureHash($merchantTxnNo) // adjust according to ICICI spec
    //     ];

    //     return $this->curlPost($this->statusCheckUrl, $payload);
    // }

    // // Refund API
    // public function refund($merchantTxnNo, $refundAmount)
    // {
    //     $payload = [
    //         "merchantId"      => $this->merchantId,
    //         "aggregatorID"    => $this->aggregatorId,
    //         "merchantTxnNo"   => 'REF' . now()->format('YmdHis'),
    //         "originalTxnNo"   => $merchantTxnNo,
    //         "amount"          => number_format($refundAmount, 2, '.', ''),
    //         "transactionType" => "REFUND",
    //         "secureHash"      => $this->generateSecureHash($merchantTxnNo)
    //     ];

    //     return $this->curlPost($this->refundUrl, $payload);
    // }

    // Helper: Generate secureHash
    private function generateSecureHash($hashText)
    {
        return hash_hmac('sha256', $hashText, $this->secretKey);
    }

    // Helper: curl POST
    private function curlPost($url, $payload)
    {
        Log::info("Executing curlPost", ['url' => $url]);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
             Log::error('Curl Error', ['error' => curl_error($ch)]);
        }

        curl_close($ch);
        Log::info("Curl Raw Response: " . $response);
        return json_decode($response, true);
    }
}
