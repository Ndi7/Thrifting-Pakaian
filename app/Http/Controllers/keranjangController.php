<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function index()
    {
        return view('pembeli.keranjang');
    }
}
