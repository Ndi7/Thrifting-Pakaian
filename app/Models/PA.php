<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PA extends Model
{
    use HasFactory;
    protected $table = "pakaianatas";
    	protected $primarykey = "id";
    	protected $fillable = [
            'id', 'gambar', 'nama_produk_pa', 'deskripsi_pa', 'stok', 'harga_pa'];
}
