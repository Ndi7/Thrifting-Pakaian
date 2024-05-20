<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_produk',
        'kategori_id',
        'harga',
        'deskripsi',
        'stok',
        'foto_produk'
    ];
    public function Category()
    {
        return $this->belongsTo(Kategori::class);
    }
}
