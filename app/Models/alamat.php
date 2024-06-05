<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat_pengiriman';

    protected $fillable = [];

    protected static function newFactory(){
        return \Database\Factories\AlamatFactory::new();
    }
}
