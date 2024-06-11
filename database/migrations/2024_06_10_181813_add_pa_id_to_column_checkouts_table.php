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
            $table->unsignedBigInteger('pa_product_id')->nullable()->after('id');
            $table->foreign('pa_product_id')->references('id')->on('pakaianatas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            schema::disableForeignKeyConstraints();
            $table->dropForeign('pa_product_id');
        });
    }
};
