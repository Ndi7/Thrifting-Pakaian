<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class detailpesanan extends Controller
{
    public function index()
    {
        return view('pembeli.detailpesanan');
    }
}
