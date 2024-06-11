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
        Schema::table('checkouts', function (Blueprint $table) {
            $table->unsignedBigInteger('pb_product_id')->nullable()->after('id');
            $table->foreign('pb_product_id')->references('id')->on('pakaianbawah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            schema::disableForeignKeyConstraints();
            $table->dropForeign('pb_product_id');
        });
    }
};
