<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    protected $fillable = [
        'name',
        'initiated_name',
        'birthdate',
        'email',
        'mobile',
        'amount',
        'merchant_txn_no',
        'status',
        'txn_id',
        'payment_id',
        'auth_code',
        'payment_mode',
        'response_code',
        'response_description',
        'payment_datetime',
        'pan',
        'address',
        'city',
        'state',
        'pincode',
        'source',
        'donation_type',
        'receipt_sent',
    ];

    protected $casts = [
        'receipt_sent' => 'boolean',
        'birthdate' => 'date',
    ];
}
