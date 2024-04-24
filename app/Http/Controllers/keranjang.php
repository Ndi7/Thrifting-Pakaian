<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keranjang extends Controller
{
    public function index()
    {
        return view('pembeli.keranjang');
    }
}
