<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::post('/payment/webhook', function () {
    return response()->json(['ok' => true]);
});