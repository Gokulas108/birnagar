<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

// routes/api.php
Route::post('/payment/initiate', function (\Illuminate\Http\Request $request) {
    // Merge a flag to tell the controller this is an API call
    $request->merge(['api' => true]);
    return app(\App\Http\Controllers\PaymentController::class)->initiateSale($request);
});
