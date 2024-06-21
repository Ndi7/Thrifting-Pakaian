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
            'name' => 'Buyer001',
            'email' => 'Buyer001@gmail.com', // Perbaiki format email
            'password' => bcrypt('Buyer001'),
            'level' => 'pembeli', // Pastikan kolom ini ada dalam tabel users
            'address' => 'Tanjung Punggur, RT 00 RW 00 Kel. Dalua, Kec. Simo Simo',
            'phone' => '087711111111',
            'photo' => 'PRFL062024_117.png',
        ]);
        
        User::create([
            'name' => 'Buyer002',
            'email' => 'Buyer002@gmail.com', // Perbaiki format email
            'password' => bcrypt('Buyer002'),
            'level' => 'pembeli', // Pastikan kolom ini ada dalam tabel users
            'address' => 'Kabil',
            'phone' => '087722222222',
            'photo' => 'PRFL062024_344.png',
        ]);
        
        User::create([
            'name' => 'Buyer003',
            'email' => 'Buyer003@gmail.com', // Perbaiki format email
            'password' => bcrypt('Buyer003'),
            'level' => 'pembeli', // Pastikan kolom ini ada dalam tabel users
            'address' => 'Batam Center',
            'phone' => '087733333333',
            'photo' => 'PRFL062024_843.png',
        ]);
        
        User::create([
            'name' => 'Buyer004',
            'email' => 'Buyer004@gmail.com', // Perbaiki format email
            'password' => bcrypt('Buyer004'),
            'level' => 'pembeli', // Pastikan kolom ini ada dalam tabel users
            'address' => 'simpang Dam Mukakuning',
            'phone' => '087744444444',
            'photo' => 'PRFL062024_622.png',
        ]);

        User::create([
            'name' => 'TOKO Second',
            'nama_toko' => 'TOKO Second', // Pastikan kolom ini ada dalam tabel users
            'email' => 'tokosecond2ND@gmail.com', // Perbaiki format email
            'password' => bcrypt('Tokosecond'),
            'level' => 'penjual', // Pastikan kolom ini ada dalam tabel users
            'address' => 'Pulau Second',
            'phone' => '6287712330000',
            'photo' => 'PRFL062024_635.png',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
