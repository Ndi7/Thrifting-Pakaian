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

            $table->unsignedBigInteger('category_id'); // Kolom untuk foreign key

            // Menambahkan foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('stok', ['habis', 'tersedia']);
            $table->string('price')->nullable();
            $table->string('image')->nullable();
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
