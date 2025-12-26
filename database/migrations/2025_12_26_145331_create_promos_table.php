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
       Schema::create('promos', function (Blueprint $table) {
        $table->id();
        $table->string('title');        // Judul Promo (Misal: Diskon Akhir Tahun)
        $table->text('description');    // Penjelasan singkat
        $table->string('image');        // Banner promo
        $table->boolean('is_active')->default(true); // Status tampil/tidak
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
