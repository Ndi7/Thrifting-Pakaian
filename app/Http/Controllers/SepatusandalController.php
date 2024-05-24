<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SS;
use Illuminate\Support\Facades\DB;

class SepatusandalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtSS = SS::all();
        $dtSS = SS::latest()->get();
        	return view('penjual.produk.SS.ss-data',compact('dtSS'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.produk.SS.ss-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $nm->move(public_path(). '/images/SS', $namaFile);

        SS::create([
            'nama_produk_ss' => $request->nama_produk,
            'gambar' => $namaFile,
            'deskripsi_ss' => $request->deskripsi,
            'stok' => $request->stok,
            'harga_ss' => $request->harga,
        ]);

        return redirect('data-sepatusandal')->with('success', 'Data Berhasil Disimpan');;
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
        $dtPB = SS::findorfail($id);

        return view('penjual.produk.SS.ss-edit',compact('dtSS'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // Fetch the existing record
        $ubah = SS::findOrFail($id);
        $awal = $ubah->gambar;

        // Handle the file upload if a new file is provided
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = $ubah->gambar;
            $gambar->move(public_path('/images/SS'), $namaFile);
            $awal = $namaFile; // Update the file name in the database
        }

        // Update the database record
        $ubah->update([
            'nama_produk_ss' => $request->input('nama_produk'),
            'deskripsi_ss' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_ss' => $request->input('harga'),
            'gambar' => $awal,
            // Add other fields as needed
        ]);
        
        return redirect('data-sepatusandal')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteSS = SS::findorfail($id);

        $file = public_path('/images/SS/').$deleteSS->gambar;
        // cek jika ada gambar
        if (file_exists($file)){
            // Maka hapus file di folder public/images/PA
            @unlink($file);
        }

            $deleteSS->delete();

            return back()->with('info', 'Data Berhasil Dihapus');
    }
}
