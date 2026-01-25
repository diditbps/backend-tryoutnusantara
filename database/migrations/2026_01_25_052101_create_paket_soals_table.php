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
        Schema::create('paket_soals', function (Blueprint $table) {
            $table->id();
            $table->string("nama_paket");
            $table->string("jenis_tryout");
            $table->string("ket_member");
            $table->string("harga");
            $table->string("event");
            $table->date("tanggal_rilis");
            $table->date("tanggal_expired");
            $table->year("tahun");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_soals');
    }
};
