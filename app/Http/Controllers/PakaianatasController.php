<?php

namespace App\Http\Controllers;

use App\Models\PA;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class PakaianatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPA = PA::all();
        $dtPA = PA::latest()->get();
        	return view('penjual.produk.PA.data-pa',compact('dtPA'));     
    }

    public function katalog()
    {
        $dtPA = PA::all();
        	return $dtPA;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.produk.PA.create-pa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $nm->move(public_path(). '/images/PA', $namaFile);

        PA::create([
            'gambar' => $filename,
            'nama_produk_pa' => $request->nama_produk_pa,
            'stok' => $request->stok,
            'harga_pa' => $request->harga_pa,
            'ukuran' => $request->ukuran,
            'warna' => $request->warna,
            'brand' => $request->brand,
            'material' => $request->material,
            'kondisi' => $request->kondisi,
            'detailtambahan' => $request->detailtambahan,
            'deskripsiproduk' => $request->deskripsiproduk,
            'catatan' => $request->catatan,
        ]);
            // $dtUpload = new PA;
            // $dtUpload->nama_produk_pa = $request->nama;
            // $dtUpload->gambar = $namaFile;
            
            // $dtUpload->save();
        return redirect('data-pakaianatas')->with('success', 'Data Berhasil Disimpan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $dtPA = PA::findorfail($id);

        return view('penjual.produk.PA.edit-pa',compact('dtPA'));

    }
    public function detailproduk(string $id)
    {   
        $dtPA = PA::findorfail($id);

        return view('pembeli.singleproduk',compact('dtPA'));

    }

    public function checkoutproduk(string $id)
    {   
        $dtPA = PA::findorfail($id);

        return view('checkout',compact('dtPA'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        // Fetch the existing record
        $ubah = PA::findOrFail($id);
        $awal = $ubah->gambar;

        // Handle the file upload if a new file is provided
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = $ubah->gambar;
            $gambar->move(public_path('/images/PA'), $namaFile);
            $awal = $namaFile; // Update the file name in the database
        }

        // Update the database record
        $ubah->update([
            'nama_produk_pa' => $request->input('nama_produk'),
            'deskripsi_pa' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_pa' => $request->input('harga'),
            'gambar' => $awal,
            // Add other fields as needed
        ]);

        return redirect('data-pakaianatas')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePA = PA::findorfail($id);

        $file = public_path('/images/PA/').$deletePA->gambar;
        // cek jika ada gambar
        if (file_exists($file)){
            // Maka hapus file di folder public/images/PA
            @unlink($file);
        }

        $deletePA->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    public function cetakPdf()
    {
        $dtPA = PA::all();
        $pdf = Pdf::loadView('penjual.produk.PA.cetak-pa', compact('dtPA'));
        return $pdf->stream('Data Produk Pakaian Atas.pdf');
    }
}
