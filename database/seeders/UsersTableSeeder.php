<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan impor model User

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data dummy
        User::create([
            'name' => 'Second2Chance',
            'email' => 'second2chance@gmail.com', // Perbaiki format email
            'password' => bcrypt('Second2'),
            'level' => 'pembeli', // Pastikan kolom ini ada dalam tabel users
        ]);

        User::create([
            'name' => 'TOKO Second',
            'nama_toko' => 'TOKO Second', // Pastikan kolom ini ada dalam tabel users
            'email' => 'tokosecond@gmail.com', // Perbaiki format email
            'password' => bcrypt('Tokosecond'),
            'level' => 'penjual', // Pastikan kolom ini ada dalam tabel users
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
