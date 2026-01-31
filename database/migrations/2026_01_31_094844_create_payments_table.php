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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string("id_user");
            $table->string("transaction_name");
            $table->string("transaction_status");
            $table->string("transaction_time_completed");
            $table->string("transaction_amount");
            $table->string("transaction_description");
            $table->string("transaction_date_completed");
            $table->string("transaction_receipt");
            $table->string("transaction_method");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
