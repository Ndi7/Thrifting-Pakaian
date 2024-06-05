<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PB;
use Illuminate\Support\Facades\DB;

class PakaianbawahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPB = PB::all();
        $dtPB = PB::latest()->get();
        	return view('penjual.produk.PB.data-pb',compact('dtPB'));           
    }

    public function katalog()
    {
        $dtPB = PB::all();
        	return $dtPB;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.produk.PB.create-pb');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $nm->move(public_path(). '/images/PB', $namaFile);

        PB::create([
            'nama_produk_pb' => $request->nama_produk,
            'gambar' => $namaFile,
            'deskripsi_pb' => $request->deskripsi,
            'stok' => $request->stok,
            'harga_pb' => $request->harga,
        ]);

        return redirect('data-pakaianbawah')->with('success', 'Data Berhasil Disimpan');;
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
        $dtPB = PB::findorfail($id);

        return view('penjual.produk.PB.edit-pb',compact('dtPB'));

    }
    public function detailproduk(string $id)
    {   
        $dtPB = PB::findorfail($id);

        return view('pembeli.singleproduk_pb',compact('dtPB'));

    }

    public function checkoutproduk(string $id)
    {   
        $dtPB = PB::findorfail($id);

        return view('checkoutpb',compact('dtPB'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // Fetch the existing record
        $ubah = PB::findOrFail($id);
        $awal = $ubah->gambar;

        // Handle the file upload if a new file is provided
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = $ubah->gambar;
            $gambar->move(public_path('/images/PB'), $namaFile);
            $awal = $namaFile; // Update the file name in the database
        }

        // Update the database record
        $ubah->update([
            'nama_produk_pb' => $request->input('nama_produk'),
            'deskripsi_pb' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_pb' => $request->input('harga'),
            'gambar' => $awal,
            // Add other fields as needed
        ]);
        
        return redirect('data-pakaianbawah')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePB = PB::findorfail($id);

        $file = public_path('/images/PB/').$deletePB->gambar;
        // cek jika ada gambar
        if (file_exists($file)){
            // Maka hapus file di folder public/images/PA
            @unlink($file);
        }

            $deletePB->delete();

            return back()->with('info', 'Data Berhasil Dihapus');
    }
}
