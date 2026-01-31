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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string("nama_paket_soal");
            $table->string("soal");
            $table->string("pilihan1");
            $table->string("pilihan2");
            $table->string("pilihan3");
            $table->string("pilihan4");
            $table->string("pilihan5");
            $table->string("url_image");
            $table->string("jawaban");
            $table->string("tingkat_kesulitan");
            $table->string("check_qc");
            $table->string("nama_qc");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
