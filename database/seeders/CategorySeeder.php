<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            'nama_kategori' => 'baju'
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Celana'
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Jaket'
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Sepatu'
        ]);
    }
}
