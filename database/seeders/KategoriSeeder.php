<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data dummy
        Category::create([
            'nama_kategori' => 'Pakaian Atas',
        ]);
        Category::create([
            'nama_kategori' => 'Pakaian Bawah',
        ]);
        Category::create([
            'nama_kategori' => 'Sepatu/Sandal',
        ]);
    }
}
