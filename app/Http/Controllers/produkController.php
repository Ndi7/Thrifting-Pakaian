<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function keepProduk($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->is_kept) {
            return response()->json(['message' => 'Produk sedang di keep'], 403);
        }

        $produk->is_kept = true;
        $produk->save();

        return response()->json(['message' => 'Produk berhasil di keep']);
    }

    public function buyProduk($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->is_sold) {
            return response()->json(['message' => 'Produk telah terjual'], 403);
        }

        $produk->is_sold = true;
        $produk->is_kept = false;
        $produk->save();

        // Simpan ke order (Anda dapat menyesuaikan dengan data user yang login)
        $order = new Order();
        $order->produk_id = $produk->id;
        $order->user_id = auth()->id(); // Asumsi pengguna sudah login
        $order->save();

        return response()->json(['message' => 'Produk berhasil dibeli']);
    }
}
