<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class katalog extends Controller
{
    public function index()
    {
        return view('pembeli.katalog');
    }
}
