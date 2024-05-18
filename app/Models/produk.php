<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori_id', 'nama_produk', 'deskripsi', 'harga', 'stok'
    ];
}
