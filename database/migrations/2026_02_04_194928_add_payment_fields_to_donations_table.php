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
        Schema::table('donations', function (Blueprint $table) {
            $table->string('payment_id')->nullable()->after('txn_id');
            $table->string('auth_code')->nullable()->after('payment_id');
            $table->string('payment_mode')->nullable()->after('auth_code');
            $table->string('response_code')->nullable()->after('payment_mode');
            $table->text('response_description')->nullable()->after('response_code');
            $table->string('payment_datetime')->nullable()->after('response_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropColumn([
                'payment_id',
                'auth_code',
                'payment_mode',
                'response_code',
                'response_description',
                'payment_datetime'
            ]);
        });
    }
};
