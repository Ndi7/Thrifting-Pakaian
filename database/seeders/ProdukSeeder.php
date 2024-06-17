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
            'deskripsiproduk' => 'Kaos T-shirt unisex ukuran L dengan warna hitam ini adalah pilihan sempurna untuk gaya kasual sehari-hari. Dibuat oleh brand impor terkenal, kaos ini menawarkan kenyamanan dan kualitas yang tinggi. Meskipun bekas, kaos ini masih dalam kondisi sangat baik tanpa noda atau kerusakan yang signifikan. Cocok untuk pria dan wanita, t-shirt ini mudah dipadukan dengan berbagai outfit, menjadikannya item yang wajib dimiliki di lemari pakaian Anda.',
            'stok' => 1,
            'harga_pa' => 10000,
            'ukuran' => 'L',
            'warna' => 'Hitam',
            'brand' => 'Lokal',
            'material' => 'Katun',
            'kondisi' => 'Bekas',
            'detailtambahan' => 'Tidak ada kerusakan, jahitan masih kuat',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        PA::create([
            'gambar' => '1717645594734.jpg',
            'nama_produk_pa' => 'Kaos Oversize Unisex',
            'deskripsiproduk' => 'Kaos Oversize Unisex dengan warna hitam ini adalah pilihan sempurna untuk gaya kasual sehari-hari. Dibuat oleh brand terkenal, kaos ini memberikan kenyamanan dan kualitas yang tinggi. Meskipun bekas, kaos ini masih dalam kondisi sangat baik tanpa noda atau kerusakan yang signifikan.',
            'stok' => 1,
            'harga_pa' => 35000,
            'ukuran' => 'XL',
            'warna' => 'Hitam',
            'brand' => 'Uniqlo',
            'material' => 'Katun 100%',
            'kondisi' => 'Bekas Pemakaian',
            'detailtambahan' => 'Tidak ada Lecet, jahitan masih aman',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        PA::create([
            'gambar' => '1718033969684.png',
            'nama_produk_pa' => 'Jaket Blue Luxury Premium',
            'deskripsiproduk' => 'Jaket Blue Luxury Premium ini adalah pilihan sempurna untuk kebutuhan dilapangan.. Dibuat oleh brand impor terkenal, Jaket ini sangat nyaman dan kualitas yang tinggi.',
            'stok' => 1,
            'harga_pa' => 50000,
            'ukuran' => 'XL',
            'warna' => 'Blue Navy',
            'brand' => 'H&M',
            'material' => 'Kain Sintetis',
            'kondisi' => 'Bekas pemakaian',
            'detailtambahan' => 'Tidak ada kerusakan',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        PA::create([
            'gambar' => '1718033969686.jpg',
            'nama_produk_pa' => 'Kaos Oversize Uniqlo',
            'deskripsiproduk' => 'Kaos Oversize Uniqlo XL dengan warna Abu-abu elegan ini adalah pilihan sempurna untuk gaya kasual sehari-hari. Dibuat oleh brand impor singapore, kaos ini menawarkan kenyamanan dan kualitas yang tinggi. Meskipun bekas, kaos ini masih dalam kondisi sangat baik tanpa noda atau kerusakan yang signifikan. Cocok untuk pria dan wanita, t-shirt ini mudah dipadukan dengan berbagai outfit, menjadikannya item yang wajib dimiliki di lemari pakaian Anda.',
            'stok' => 1,
            'harga_pa' => 20000,
            'ukuran' => 'XL',
            'warna' => 'Abu-abu',
            'brand' => 'Singapore',
            'material' => 'Katun 100%',
            'kondisi' => 'Bekas',
            'detailtambahan' => 'Tidak ada kerusakan, jahitan masih kuat dan mulus',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        PA::create([
            'gambar' => '1718033969686.png',
            'nama_produk_pa' => 'Jaket Wanita',
            'deskripsiproduk' => 'Jaket wanita dengan warna hitam sempurna untuk gaya kasual sehari-hari. Dibuat oleh brand impor lokal terbaik, Jaket ini menawarkan kenyamanan dan kualitas yang tinggi. Meskipun bekas, Jaket ini masih dalam kondisi sangat baik tanpa noda atau kerusakan yang signifikan. Dikhususkan untuk wanita, mudah dipadukan dengan berbagai outfit, menjadikannya item yang wajib dimiliki di lemari pakaian Anda.',
            'stok' => 1,
            'harga_pa' => 10000,
            'ukuran' => 'M',
            'warna' => 'Hitam',
            'brand' => 'Lokal',
            'material' => 'Kulit',
            'kondisi' => 'Bekas',
            'detailtambahan' => 'Tidak ada kerusakan, jahitan masih kuat dan aman',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        PA::create([
            'gambar' => '1718033969687.jpg',
            'nama_produk_pa' => 'Kaos T-shirt Unisex',
            'deskripsiproduk' => 'Kaos T-shirt unisex ukuran L dengan warna hitam ini adalah pilihan sempurna untuk gaya kasual sehari-hari. Dibuat oleh brand impor terkenal, kaos ini menawarkan kenyamanan dan kualitas yang tinggi. Meskipun bekas, kaos ini masih dalam kondisi sangat baik tanpa noda atau kerusakan yang signifikan. Cocok untuk pria dan wanita, t-shirt ini mudah dipadukan dengan berbagai outfit, menjadikannya item yang wajib dimiliki di lemari pakaian Anda.',
            'stok' => 1,
            'harga_pa' => 10000,
            'ukuran' => 'L',
            'warna' => 'Mustard',
            'brand' => 'Lokal',
            'material' => 'Katun',
            'kondisi' => 'Bekas',
            'detailtambahan' => 'Tidak ada kerusakan, jahitan masih kuat',
            'catatan' => 'Produk ini telah dicuci dan disterilkan, siap untuk digunakan oleh pemilik barunya. Jangan lewatkan kesempatan untuk mendapatkan t-shirt berkualitas dengan harga yang terjangkau!'
        ]);
        
        
        
        // Tambahkan data produk dummy Pakaian Bawah
        PB::create([
            'gambar' => '1716956561484.jpg',
            'nama_produk_pb' => 'Celana Jeans Pria',
            'deskripsiproduk' => ' Celana jeans pria dengan desain robek modern, cocok untuk gaya kasual.',
            'stok' => 1,
            'harga_pb' => 30000,
            'ukuran' => 'XL',
            'warna' => 'Biru',
            'brand' => 'DenimX',
            'material' => 'Denim',
            'kondisi' => 'Bekas',
            'detailtambahan' => 'Terdapat kantong di depan dan belakang, serta kancing dan resleting.',
            'catatan' => 'Cuci terpisah dengan pakaian lain untuk pertama kali.'
        ]);
        PB::create([
            'gambar' => '1717821754135.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita',
            'deskripsiproduk' => 'Celana jeans wanita klasik dengan potongan slim fit, nyaman digunakan sehari-hari.',
            'stok' => '1',
            'harga_pb' =>20000,
            'ukuran' =>'M',
            'warna' =>'Biru Tua',
            'brand' =>'ChicDenim',
            'material' =>'Denim',
            'kondisi' =>'Bekas',
            'detailtambahan' =>'Resleting depan dengan kancing, kantong depan dan belakang.',
            'catatan' =>''
        ]);
        PB::create([
            'gambar' => '1717821754136.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita Unisex',
            'deskripsiproduk' => 'Celana jeans unisex dengan potongan longgar, cocok untuk semua gender.',
            'stok' => '1',
            'harga_pb' =>20000,
            'ukuran' =>'L',
            'warna' =>'Hitam',
            'brand' =>'UniStyle',
            'material' =>'Denim',
            'kondisi' =>'bekas',
            'detailtambahan' =>'Kantong depan dan belakang, kancing dan resleting depan.',
            'catatan' =>'Cuci dengan air dingin untuk menjaga warna.'
        ]);
        PB::create([
            'gambar' => '1717821754137.jpg',
            'nama_produk_pb' => 'Celana Jeans Wanita (Murah)',
            'deskripsiproduk' => 'Celana jeans wanita dengan harga terjangkau, cocok untuk penggunaan sehari-hari.',
            'stok' => '1',
            'harga_pb' => 15000,
            'ukuran' =>'M',
            'warna' =>'Biru Tua',
            'brand' =>'BudgetJeans',
            'material' =>'Denim',
            'kondisi' =>'bekas',
            'detailtambahan' =>'Desain klasik dengan resleting dan kancing di depan.',
            'catatan' =>'Jemur terbalik agar warna tidak cepat pudar.'
        ]);
        PB::create([
            'gambar' => '1717821754138.jpg',
            'nama_produk_pb' => 'Celana Jeans Cutbray',
            'deskripsiproduk' => 'Celana jeans wanita model cutbray, memberikan tampilan retro yang modis.',
            'stok' => '1',
            'harga_pb' => 15000,
            'ukuran' =>'L',
            'warna' =>'Biru Muda',
            'brand' =>'RetroDenim',
            'material' =>'Denim',
            'kondisi' =>'bekas',
            'detailtambahan' =>'Potongan cutbray dengan resleting dan kancing di depan.',
            'catatan' =>'Cuci dengan deterjen lembut.'
        ]);
        PB::create([
            'gambar' => '1717821754139.png',
            'nama_produk_pb' => 'Rok Mini',
            'deskripsiproduk' => 'Rok mini berbahan katun, nyaman dan cocok untuk acara santai.',
            'stok' => '1',
            'harga_pb' => 10000,
            'ukuran' =>'M',
            'warna' =>'Coklat',
            'brand' =>'MiniSkirtCo',
            'material' =>'Katun',
            'kondisi' =>'bekas',
            'detailtambahan' =>'Pinggang elastis, bahan lembut dan ringan.',
            'catatan' =>'Jangan menggunakan pemutih saat mencuci.'
        ]);


    }
}
