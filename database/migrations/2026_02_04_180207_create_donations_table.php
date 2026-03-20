<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->decimal('amount', 10, 2);
            $table->string('merchant_txn_no')->unique(); // ICICI txn number
            $table->string('status')->default('initiated'); // initiated / success / failed
            $table->string('txn_id')->nullable(); // ICICI transaction ID
            $table->string('payment_id')->nullable(); // ICICI payment ID
            $table->string('auth_code')->nullable(); // Authorization code
            $table->string('payment_mode')->nullable(); // NB, CC, DC, etc
            $table->string('response_code')->nullable(); // 0000 = success
            $table->text('response_description')->nullable(); // Transaction successful
            $table->string('payment_datetime')->nullable(); // Payment date time from gateway

            // Optional / Hidden fields
            $table->string('pan')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
