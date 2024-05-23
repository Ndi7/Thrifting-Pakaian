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
        	return view('penjual.produk.SS.data-ss',compact('dtSS'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.produk.SS.create-ss');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        SS::create([
            'nama_produk_ss' => $request->nama_produk,
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
        $dtSS = SS::findorfail($id);

        return view('penjual.produk.SS.edit-ss',compact('dtSS'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        DB::table('sepatusandal')
        ->where('id', $id)
        ->update([
            'nama_produk_ss' => $request->input('nama_produk'),
            'deskripsi_ss' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_ss' => $request->input('harga'),
            // field lainnya
        ]);
        
        return redirect('data-sepatusandal')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteSS = SS::findorfail($id);
        $deleteSS->delete();

        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
