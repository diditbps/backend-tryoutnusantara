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
        Schema::table('soals', function (Blueprint $table) {
            //
            $table->text("pembahasan")->nullable()->after('jawaban');
            $table->string("hint")->nullable()->after('pembahasan');
            $table->integer("poin")->default(0)->after('hint');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soals', function (Blueprint $table) {
            //
            $table->dropColumn(['pembahasan', 'hint', 'poin']);
        });
    }
};
