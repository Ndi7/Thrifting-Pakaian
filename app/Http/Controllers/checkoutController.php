<?php

namespace App\Http\Controllers;

use App\Models\PA;
use App\Models\PB;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        'user_email' => $request->user()->email, // Tambahkan ini untuk menyimpan email pengguna yang login
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
        'pa_product_id' => $request->pa_product_id,
        'pb_product_id' => $request->pb_product_id,
        ]);

        if ($request->pa_product_id) {
            $paProduct = PA::find($request->pa_product_id);
            $paProduct->stok -= 1;
            $paProduct->save();
        }

        if ($request->pb_product_id) {
            $pbProduct = PB::find($request->pb_product_id);
            $pbProduct->stok -= 1;
            $pbProduct->save();
        }
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
                'first_name' => $request->nama,
                'last_name' => '',
                'phone' => $request->telepon,
                'email' => $request->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pembeli.checkoutberhasil', compact('snapToken', 'dtcheckout'));

    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
            $dtcheckout = Checkout::find($request->order_id);
            $dtcheckout -> update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id){
        $dtcheckout = Checkout::find($id);
        return view('invoice', compact('dtcheckout'));

    }

    public function orderHistory()
{
    // Ambil pengguna yang diautentikasi
    $user = Auth::user();

    // Pastikan pengguna yang diautentikasi adalah pembeli
    if ($user->level !== 'pembeli') {
        abort(403, 'Unauthorized action.');
    }

    // Ambil riwayat pesanan berdasarkan email pengguna yang diautentikasi
    $dtcheckout = Checkout::with('pakaianAtas', 'pakaianBawah')
                    ->where('user_email', $user->email)
                    ->get();

    // Ambil semua data PA dan PB
    $dtPA = PA::all();
    $dtPB = PB::all();

    return view('pembeli.riwayatpesanan', compact('dtcheckout', 'dtPA', 'dtPB'));
}



}
