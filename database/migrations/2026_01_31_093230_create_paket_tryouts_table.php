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
        Schema::create('paket_tryouts', function (Blueprint $table) {
            $table->id();
            $table->string("jenis_tryout");
            $table->string("nama_paket_tryout");
            $table->string("is_premium");
            $table->string("harga");
            $table->string("is_event");
            $table->date("tanggal_rilis");
            $table->date("tanggal_expired");
            $table->year("tahun");
            $table->string("rate");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_tryouts');
    }
};
