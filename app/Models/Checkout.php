<?php

namespace App\Models;

use App\Models\PA;
use App\Models\PB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'pb_product_id',
        'pa_product_id',
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

        public function pakaianAtas()
    {
        return $this->belongsTo(PA::class, 'pa_product_id');
    }

    public function pakaianBawah()
    {
        return $this->belongsTo(PB::class, 'pb_product_id');
    }

    // Checkout.php (model)

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
