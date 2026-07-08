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
            // True once the WhatsApp receipt template was delivered successfully;
            // false if a send was attempted but failed. Null for rows that never
            // triggered a send (all pre-existing rows, and non-web donations).
            $table->boolean('receipt_sent')->nullable()->after('donation_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropColumn('receipt_sent');
        });
    }
};
