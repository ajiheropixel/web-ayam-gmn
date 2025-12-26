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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');         // Contoh: Ayam Broiler Utuh
        $table->string('slug');         // Untuk URL: ayam-broiler-utuh
        $table->text('description');    // Detail produk
        $table->decimal('price', 12, 2); // Harga (maksimal ratusan juta)
        $table->integer('stock');       // Jumlah stok
        $table->string('image')->nullable(); // Foto produk
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
