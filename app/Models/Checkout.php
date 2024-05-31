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
        'apartemen',
        'provinsi',
        'kota',
        'kode_pos',
        'telepon',
        'opsi_pengiriman',
        'opsi_pembayaran',
        'catatan_pesanan',
    ];

    // Optionally, you can define the casts property to cast certain attributes to specific types
    protected $casts = [
        'subscribe' => 'boolean',
    ];
}
