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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->boolean('subscribe')->default(false);
            $table->string('nama');
            $table->text('alamat');
            $table->string('apartemen')->nullable();
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('telepon');
            $table->string('opsi_pengiriman');
            $table->string('opsi_pembayaran');
            $table->text('catatan_pesanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};
