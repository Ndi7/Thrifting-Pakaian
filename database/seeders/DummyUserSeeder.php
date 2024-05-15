<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData  = [
            [
                'name' => 'pembeli',
                'email'=> 'pembeli@gmmail.com',
                'password'=> bcrypt('pembeli09'),
                'role'=>'pembeli',
            ],
            [
                'name' => 'penjual',
                'email'=> 'penjual@gmmail.com',
                'password'=> bcrypt('penjual09'),
                'role'=>'penjual',
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
