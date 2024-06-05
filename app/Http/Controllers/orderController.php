<?php

namespace App\Http\Controllers;

use App\Models\alamat;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function checkout() {
        $user = auth()->user();

         // Mengambil alamat berdasarkan pengguna
        $addresses = alamat::where('user_id', $user->id)->get();

        // Mengisi data yang akan dikirimkan ke tampilan
        $data['addresses'] = $addresses;

        return view("Checkout1", $data);
    }
}
