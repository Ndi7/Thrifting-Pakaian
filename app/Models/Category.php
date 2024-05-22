<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "kategori";
	protected $primarykey = "id";
    protected $fillable = [
        'id','nama_kategori'];
    protected $guarded = [];
}
