<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index() {
        return view("checkout");
    }

    public function store(Request $request)
    {

        $ongkos = 20000;
    $harga_produk = $request->harga_produk;
    $subtotal = $ongkos + $harga_produk;

    $checkout = Checkout::create([
        'email' => $request->email,
        'subscribe' => $request->has('subscribe'),
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'label' => $request->label,
        'provinsi' => $request->provinsi,
        'kota' => $request->kota,
        'kode_pos' => $request->kode_pos,
        'telepon' => $request->telepon,
        'opsi_pengiriman' => $request->opsi_pengiriman,
        'ongkos' => $ongkos,
        'opsi_pembayaran' => $request->opsi_pembayaran,
        'catatan_pesanan' => $request->catatan_pesanan,
        'nama_produk' => $request->nama_produk,
        'harga_produk' => $harga_produk,
        'subtotal' => $subtotal,
        'status' => 'Unpaid', // Set status to Unpaid by default
        ]);



        return redirect()->route('checkoutberhasil', $checkout->id)->with('success', 'Checkout berhasil!');
    }

    public function show(Request $request, $id)
    {
        $dtcheckout = Checkout::findorfail($id);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $dtcheckout->id,
                'gross_amount' => $dtcheckout->subtotal,
            ),
            'customer_details' => array(
                'name' => $request->nama,
                'phone' => $request->telepon,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pembeli.checkoutberhasil', compact('snapToken', 'dtcheckout'));

    }

}
