<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'subscribe',
        'nama',
        'alamat',
        'label',
        'provinsi',
        'kota',
        'kode_pos',
        'telepon',
        'opsi_pengiriman',
        'ongkos',
        'opsi_pembayaran',
        'catatan_pesanan',
        'nama_produk',
        'harga_produk',
        'subtotal',
        'status',
    ];

    // Optionally, you can define the casts property to cast certain attributes to specific types
    protected $casts = [
        'subscribe' => 'boolean',
    ];

    // Checkout.php (model)

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
