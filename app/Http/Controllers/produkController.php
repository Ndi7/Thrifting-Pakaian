<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function checkout($id)
    {
        $produk = Produk::findOrFail($id);

        // Cek apakah produk sudah terjual
        if ($produk->is_sold) {
            return redirect()->back()->with('error', 'Produk ini sudah terjual.');
        }

        return view('checkout', compact('produk'));
    }

    public function completePurchase(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Cek apakah produk sudah terjual
        if ($produk->is_sold) {
            return redirect()->back()->with('error', 'Produk ini sudah terjual.');
        }

        // Tandai produk sebagai terjual
        $produk->is_sold = true;
        $produk->save();

        // Simpan detail pembelian
        Purchase::create([
            'produk_id' => $produk->id,
            'email' => $request->email,
            'nama' => $request->name,
            'alamat' => $request->address,
            'kota' => $request->city,
            'kodepos' => $request->postal_code,
            'no_hp' => $request->phone,
        ]);

        return redirect()->route('home')->with('success', 'Pembelian berhasil.');
    }
}
