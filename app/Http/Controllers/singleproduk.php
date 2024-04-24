<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleproduk extends Controller
{
    public function index()
    {
        return view('pembeli.singleproduk');
    }
}
