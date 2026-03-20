<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Log;

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
        $this->merchantId     = env('ICICI_MERCHANT_ID');
        $this->aggregatorId   = env('ICICI_AGGREGATOR_ID');
        $this->secretKey      = env('ICICI_SECRET_KEY');
        $this->initiateSaleUrl = env('ICICI_INITIATE_SALE_URL');
    }

    // Show donation form
    public function showDonationForm()
    {
        return view('pages.donate');
    }

    // Initiate sale
    public function initiateSale(Request $request)
    {
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
            'pincode' => $request->pincode
        ]);

        $hashText = ($request->addlParam1 ?? '') .
                    ($request->addlParam2 ?? '') .
                    $this->aggregatorId .
                    $amount .
                    '356' .
                    $request->email .
                    $request->mobile .
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
            "customerMobileNo"=> $request->mobile,
            "customerName"    => $request->name,
            "addlParam1"      => $request->addlParam1 ?? '',
            "addlParam2"      => $request->addlParam2 ?? '',
            "secureHash"      => $secureHash
        ];

        $response = $this->curlPost($this->initiateSaleUrl, $payload);

        if (!$response || !isset($response['redirectURI'])) {
            return back()->withErrors(['msg' => 'Payment gateway error.']);
        }

        return redirect($response['redirectURI'] . '?tranCtx=' . $response['tranCtx']);
    }

    // ICICI callback
    public function handleCallback(Request $request)
    {
        
        // ICICI uses responseCode instead of txnStatus
        // 0000 = Success, others = Failed
        $responseCode = $request->responseCode ?? '';
        $txnStatus = ($responseCode === '0000') ? 'SUCCESS' : 'FAILED';
        
        $donation = Donation::where('merchant_txn_no', $request->merchantTxnNo)->first();

        if ($donation) {
            $donation->status = strtolower($txnStatus);
            $donation->txn_id = $request->txnID ?? null;
            $donation->payment_id = $request->paymentID ?? null;
            $donation->auth_code = $request->authCode ?? null;
            $donation->payment_mode = $request->paymentMode ?? null;
            $donation->response_code = $responseCode;
            $donation->response_description = $request->respDescription ?? null;
            $donation->payment_datetime = $request->paymentDateTime ?? null;
            $donation->save();
        }

        return view('donation.callback', ['status' => $txnStatus, 'txnID' => $request->txnID ?? null, 'amount' => $donation->amount ?? null, 'respDescription' => $request->respDescription ?? null]);
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
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}
