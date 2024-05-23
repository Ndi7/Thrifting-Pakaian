<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjual = User::create([
            'name' => 'penjual',
            'nama_toko' => 'toko_penjual',
            'email' => 'penjual@example.com',
            'password' => bcrypt('penjual'),
        ]);
        $penjual->assignRole('penjual');

        $pembeli = User::create([
            'name' => 'pembeli',
            'email' => 'pembeli@example.com',
            'password' => bcrypt('pembeli'),
        ]);
        $pembeli->assignRole('pembeli');
    }
}
