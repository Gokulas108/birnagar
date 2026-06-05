<?php

use App\Http\Controllers\DonationExportController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::post('/payment/webhook', [PaymentController::class, 'handleWebhook'])
    ->name('payment.webhook');

// Read-only donations export for the wall-of-legacy reconciliation dashboard.
// Guarded by the X-Export-Key header (config services.wall.export_key).
Route::get('/api/export/donations', [DonationExportController::class, 'donations'])
    ->name('export.donations');
