<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index()
    {
        return view("checkout");
    }

    public function store(Request $request)
    {

        Checkout::create([
            'email' => $request->email,
            'subscribe' => $request->has('subscribe'),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'apartemen' => $request->apartemen,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kode_pos' => $request->kode_pos,
            'telepon' => $request->telepon,
            'opsi_pengiriman' => $request->opsi_pengiriman,
            'opsi_pembayaran' => $request->opsi_pembayaran,
            'catatan_pesanan' => $request->catatan_pesanan,
        ]);

        return redirect('checkoutberhasil')->with('success', 'Checkout berhasil!');
    }

    public function edit(string $id)
    {   
        $dtcheckout = Checkout::findorfail($id);

        return view('pembeli.checkoutberhasil',compact('dtcheckout'));

    }
}
