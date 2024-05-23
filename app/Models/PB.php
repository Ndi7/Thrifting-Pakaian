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
            'id', 'nama_produk_pb', 'deskripsi_pb', 'stok', 'harga_pb'];
}
