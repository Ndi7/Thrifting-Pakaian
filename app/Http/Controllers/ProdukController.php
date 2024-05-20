<?php

namespace App\Http\Controllers;
use App\Models\PA;
use App\Models\PB;
use App\Models\SS;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtProduk_pa = PA::all();
        $dtProduk_pb = PB::all();
        $dtProduk_ss = SS::all();
        
        return view('penjual.produk.produk',compact('dtProduk_pa', 'dtProduk_pb', 'dtProduk_ss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.produk.PA.create-pa');
    }

    public function createpb()
    {
        return view('penjual.produk.PB.create-pb');
    }
    
    public function createss()
    {
        return view('penjual.produk.SS.create-ss');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        PA::create([
            'nama_produk_pa' => $request->nama_produk_pa,
            'deskripsi_pa' => $request->deskripsi_pa,
            'jumlah_pa' => $request->jumlah_pa,
            'harga_pa' => $request->harga_pa,
        ]);
        //  // Validasi data
        // $request->validate([
        //     // Aturan validasi sesuai kebutuhan
        //     'nama_produk_pa' => 'required|string|max:255',
        //     'deskripsi_pa' => 'required|string|max:255',
        //     'jumlah_pa' => 'required|string|max:255',
        //     'harga_pa' => 'required|integer',
        //     'nama_produk_pb' => 'required|string|max:255',
        //     'deskripsi_pb' => 'required|string|max:255',
        //     'jumlah_pb' => 'required|string|max:255',
        //     'harga_pb' => 'required|integer',
        //     'nama_produk_ss' => 'required|string|max:255',
        //     'deskripsi_ss' => 'required|string|max:255',
        //     'jumlah_ss' => 'required|string|max:255',
        //     'harga_ss' => 'required|integer',
            
        // ]);

        // // Gunakan transaksi database untuk memastikan semua penyimpanan berhasil
        // DB::beginTransaction();

        // try {
        //     // Simpan data ke tabel PA
        //     $pa = new PA();
        //     $pa->nama_produk_pa = $request->input('nama_produk_pa');
        //     $pa->deskripsi_pa = $request->input('deskripsi_pa');
        //     $pa->jumlah_pa = $request->input('jumlah_pa');
        //     $pa->harga_pa = $request->input('harga_pa');
        //     $pa->save();
        //     $pb = new PB();
        //     $pb->nama_produk_pb = $request->input('nama_produk_pb');
        //     $pb->deskripsi_pb = $request->input('deskripsi_pb');
        //     $pb->jumlah_pb = $request->input('jumlah_pb');
        //     $pb->harga_pb = $request->input('harga_pb');
        //     $pb->save();
        //     $ss = new SS();
        //     $ss->nama_produk_ss = $request->input('nama_produk_ss');
        //     $ss->deskripsi_ss = $request->input('deskripsi_ss');
        //     $ss->jumlah_ss = $request->input('jumlah_ss');
        //     $ss->harga_ss = $request->input('harga_ss');
        //     $ss->save();

        //     // Redirect atau respon sesuai kebutuhan
        //     return redirect()->route('penjual.produk.produk')->with('success', 'Data berhasil disimpan');
        // } catch (\Exception $e) {
        //     // Jika terjadi kesalahan, rollback transaksi
        //     DB::rollBack();
        //     return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        // }
        return redirect('data-produk')->with('success', 'Data Berhasil Disimpan');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
