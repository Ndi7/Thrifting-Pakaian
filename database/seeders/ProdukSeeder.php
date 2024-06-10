<?php

namespace Database\Seeders;

use App\Models\PA;
use App\Models\PB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan data produk dummy Pakaian Atas
        PA::create([
            'gambar' => '1718033969685.jpg',
            'nama_produk_pa' => 'Kaos T-shirt Unisex',
            'deskripsi_pa' => 'Kaos T-shirt Unisex, Ukuran L, Warna Hitam, Brand Impor',
            'stok' => 1,
            'harga_pa' => 10000,
        ]);
        PA::create([
            'gambar' => '1718033969684.png',
            'nama_produk_pa' => 'Jaket Blue Xury',
            'deskripsi_pa' => 'Jaket Blue Xury, anti air, Ukuran L, Warna Biru,Brand Singapore',
            'stok' => 1,
            'harga_pa' => 50000,
        ]);
        PA::create([
            'gambar' => '1717645594734.jpg',
            'nama_produk_pa' => 'Kaos Oversize Unisex',
            'deskripsi_pa' => 'Kaos Oversize Unisex, Ukuran XL, Warna Hitam, Uniqlo Brand',
            'stok' => 1,
            'harga_pa' => 35000,
        ]);
        PA::create([
            'gambar' => '1718033969686.jpg',
            'nama_produk_pa' => 'Kaos Oversize Unisex White',
            'deskripsi_pa' => 'Kaos Oversize Unisex White, Ukuran XL Pria/Wanita, Warna Putih, Brand H&M',
            'stok' => 1,
            'harga_pa' => 15000,
        ]);
        PA::create([
            'gambar' => '1718033969686.png',
            'nama_produk_pa' => 'Jas Wanita',
            'deskripsi_pa' => 'Jas Wanita, Ukuran M, Warna Hitam, Brand Lokal, Masih Mulus hanya bekas pemakaian',
            'stok' => 1,
            'harga_pa' => 20000,
        ]);
        PA::create([
            'gambar' => '1718033969687.jpg',
            'nama_produk_pa' => 'Kaos T-shirt Polos',
            'deskripsi_pa' => 'Kaos T-shirt Polos, Ukuran M, Warna Mustard, No-Brand, Jual cepat',
            'stok' => 1,
            'harga_pa' => 10000,
        ]);
        
        
        // Tambahkan data produk dummy Pakaian Bawah
        PB::create([
            'gambar' => '1716956561484.jpg',
            'nama_produk_pb' => 'Celana Jeans Pria',
            'deskripsi_pb' => 'Celana Jeans Pria, Ukuran P37, Warna Navy (Masih mulus), Brand Impor',
            'stok' => 1,
            'harga_pb' => 30000,
        ]);
        PB::create([
            'gambar' => '1717821754135.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita',
            'deskripsi_pb' => 'Celana Jeans Wanita, Ukuran 28, Warna Coklat, Brand Singapore',
            'stok' => 1,
            'harga_pb' => 20000,
        ]);
        PB::create([
            'gambar' => '1717821754136.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita Unisex',
            'deskripsi_pb' => 'Celana Jeans Wanita Unisex, Ukuran 28, Warna Hitam, Uniqlo Brand',
            'stok' => 1,
            'harga_pb' => 20000,
        ]);
        PB::create([
            'gambar' => '1717821754137.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita',
            'deskripsi_pb' => 'Celana Jeans Wanita, Ukuran 27, Warna brown-gold, Brand H&M',
            'stok' => 1,
            'harga_pb' => 15000,
        ]);
        PB::create([
            'gambar' => '1717821754138.jpg',
            'nama_produk_pb' => 'Celana Jeans Cutbray',
            'deskripsi_pb' => 'Celana Jeans Cutbray Pria/wanita, Ukuran 30-33, Warna Navy, Brand Lokal,  Mulus bekas pemakaian',
            'stok' => 1,
            'harga_pb' => 15000,
        ]);
        PB::create([
            'gambar' => '1717821754139.png',
            'nama_produk_pb' => 'Rok Mini',
            'deskripsi_pb' => 'Rok Mini Wanita, Ukuran M, Warna Coklat, Brand Impor Singapore, Jual cepat',
            'stok' => 1,
            'harga_pb' => 10000,
        ]);


    }
}
