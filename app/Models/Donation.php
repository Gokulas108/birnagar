<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    protected $fillable = [
        'name',
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
        'pincode'
    ];

}
