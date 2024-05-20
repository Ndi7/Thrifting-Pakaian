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
        Schema::create('sepatusandal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk_ss');
            $table->string('deskripsi_ss');
            $table->string('jumlah_ss');
            $table->integer('harga_ss');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepatusandal');
    }
};
