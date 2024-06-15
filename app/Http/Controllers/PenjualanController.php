<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        $checkout = Checkout::all(); // Misalnya ini, mengambil semua data checkout dari model Checkout

    return view('penjual.penjualan.penjualan', compact('checkout'));
    }

    public function invoicepenjual($id){
        $dtcheckout = Checkout::find($id);
        return view('penjual.penjualan.invoicepenjual', compact('dtcheckout'));

    }
}
