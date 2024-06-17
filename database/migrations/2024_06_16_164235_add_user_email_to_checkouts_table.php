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
            // Tambahkan kolom user_email dengan nullable sementara
            $table->string('user_email')->nullable()->after('id');
        });

        // Perbarui nilai user_email untuk semua entri yang ada
        DB::table('checkouts')->update(['user_email' => DB::raw('(SELECT email FROM users WHERE user_email = checkouts.user_email)')]);

        Schema::table('checkouts', function (Blueprint $table) {
            // Jadikan kolom user_email tidak nullable setelah diperbarui
            $table->string('user_email')->nullable(false)->change();

            // Tambahkan foreign key constraint
            $table->foreign('user_email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropForeign(['user_email']);
            $table->dropColumn('user_email');
        });
    }
};
