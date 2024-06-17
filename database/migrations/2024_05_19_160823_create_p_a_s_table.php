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
        Schema::create('pakaianatas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama_produk_pa');
            $table->string('stok');
            $table->integer('harga_pa');
            $table->string('ukuran');
            $table->string('warna');
            $table->string('brand');
            $table->string('material');
            $table->string('kondisi');
            $table->string('detailtambahan');
            $table->text('deskripsiproduk');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaianatas');
    }
};
