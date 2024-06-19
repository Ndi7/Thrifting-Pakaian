<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PB extends Model
{
    use HasFactory;
        protected $table = "pakaianbawah";
    	protected $primarykey = "id";
    	protected $fillable = [
            'id',
            'gambar',
            'nama_produk_pb',
            'deskripsiproduk',
            'stok',
            'harga_pb',
            'ukuran',
            'warna',
            'brand',
            'material',
            'kondisi',
            'detailtambahan',
            'catatan'
        ];
}
