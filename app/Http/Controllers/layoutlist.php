<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class layoutlist extends Controller
{
    public function index()
    {
        $data = [
            'products'=>[
                ['id' => 1, 'produk' => 'Produk 1'],
                ['id' => 2, 'produk' => 'Produk 2'],
                ['id' => 3, 'produk' => 'Produk 3'],
                ['id' => 4, 'produk' => 'Produk 4'],
                ['id' => 5, 'produk' => 'Produk 5'],
            ]  
        ];

        return view('list_product')->with($data);
    }
}
