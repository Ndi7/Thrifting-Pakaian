<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PA;
use Illuminate\Support\Facades\DB;

class PakaianatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPA = PA::all();
        	return view('penjual.produk.PA.data-pa',compact('dtPA'));
            
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
        PA::create([
            'nama_produk_pa' => $request->nama_produk,
            'deskripsi_pa' => $request->deskripsi,
            'stok' => $request->stok,
            'harga_pa' => $request->harga,
        ]);

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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        DB::table('pakaianatas')
        ->where('id', $id)
        ->update([
            'nama_produk_pa' => $request->input('nama_produk'),
            'deskripsi_pa' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_pa' => $request->input('harga'),
            // field lainnya
        ]);
        
        return redirect('data-pakaianatas')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ktgr = PA::findorfail($id);
        $ktgr->delete();

        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
