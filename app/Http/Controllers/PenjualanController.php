<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Milon\Barcode\DNS1D;

class penjualanController extends Controller
{
    public function index()
    {
        $checkout = Checkout::all(); // Mengambil semua data checkout dari model Checkout
        return view('penjual.penjualan.penjualan', compact('checkout'));
    }

    public function invoicepenjual($id)
    {
        $dtcheckout = Checkout::find($id); // Mengambil data checkout berdasarkan ID
        return view('penjual.penjualan.invoicepenjual', compact('dtcheckout'));
    }

    public function downloadInvoice($id)
    {
        // Ambil detail checkout dari database
        $checkout = Checkout::find($id);
        $receiptNo = $checkout->id;
        $created_at = $checkout->created_at;
        $status = $checkout->status;
        $nama = $checkout->nama;
        $nama_produk = $checkout->nama_produk;
        $qty = $checkout->qty;
        $total = $checkout->total;
        $harga_produk = $checkout->harga_produk;
        $ongkos= $checkout->ongkos;
        $subtotal = $checkout->subtotal;
        $email = $checkout->email;
        $phone = $checkout->phone;

        // Buat instance dari kelas DNS1D
        $d = new DNS1D();

        // Panggil metode getBarcodeHTML() pada instance yang telah dibuat
        $barcode = $d->getBarcodeHTML($receiptNo, 'C39', 1, 50);

        // Mengompak data yang akan dikirim ke view
        $data = compact('receiptNo', 'created_at', 'status', 'nama', 'nama_produk', 'qty', 'total', 'harga_produk', 'ongkos', 'subtotal', 'email', 'phone', 'barcode');

        // Buat PDF dari view 'invoice' dengan data yang telah dikompak
        $pdf = Pdf::loadView('penjual.penjualan.resiinvoice', $data);

        // Stream PDF ke browser
        return $pdf->stream('invoice.pdf');
    }
    
    public function downloadAllInvoice()
{
    // Ambil semua detail checkout dari database
    $checkouts = Checkout::all();

    // Buat instance dari kelas DNS1D
    $d = new DNS1D();

    // Siapkan array untuk menyimpan data yang akan dikirim ke view
    $invoicesData = [];

    foreach ($checkouts as $checkout) {
        $barcode = $d->getBarcodeHTML($checkout->id, 'C39', 1, 50);

        // Kumpulkan data untuk setiap checkout
        $invoicesData[] = [
            'receiptNo' => $checkout->id,
            'created_at' => $checkout->created_at,
            'status' => $checkout->status,
            'nama' => $checkout->nama,
            'nama_produk' => $checkout->nama_produk,
            'qty' => $checkout->qty,
            'total' => $checkout->total,
            'harga_produk' => $checkout->harga_produk,
            'ongkos' => $checkout->ongkos,
            'subtotal' => $checkout->subtotal,
            'email' => $checkout->email,
            'phone' => $checkout->phone,
            'barcode' => $barcode,
        ];
    }

    // Buat PDF dari view 'Allresiinvoice' dengan data yang telah dikompak
    $pdf = Pdf::loadView('penjual.penjualan.Allresiinvoice', ['invoicesData' => $invoicesData]);

    // Stream PDF ke browser
    return $pdf->stream('Data invoice.pdf');
}


}
