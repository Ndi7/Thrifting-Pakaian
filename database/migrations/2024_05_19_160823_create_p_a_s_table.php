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
            $table->string('nama_produk_pa');
            $table->string('deskripsi_pa');
            $table->string('jumlah_pa');
            $table->integer('harga_pa');
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
