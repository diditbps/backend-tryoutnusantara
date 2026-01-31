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
        Schema::create('history_users', function (Blueprint $table) {
            $table->id();
            $table->string("id_user");
            $table->string("nama_paket_tryout");
            $table->string("nama_paket_soal");
            $table->string("score");
            $table->string("total_correct");
            $table->string("total_wrong");
            $table->string("status");
            $table->string("tanggal_completed");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_users');
    }
};
