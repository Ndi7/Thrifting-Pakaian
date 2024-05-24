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
        Schema::create('pakaianbawah', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama_produk_pb');
            $table->string('deskripsi_pb');
            $table->string('stok');
            $table->integer('harga_pb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaianbawah');
    }
};
