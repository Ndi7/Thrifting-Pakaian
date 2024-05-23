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
        	return view('penjual.produk.PB.data-pb',compact('dtPB'));
            
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
        PB::create([
            'nama_produk_pb' => $request->nama_produk,
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        DB::table('pakaianbawah')
        ->where('id', $id)
        ->update([
            'nama_produk_pb' => $request->input('nama_produk'),
            'deskripsi_pb' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'harga_pb' => $request->input('harga'),
            // field lainnya
        ]);
        
        return redirect('data-pakaianatas')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePB = PB::findorfail($id);
        $deletePB->delete();

        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
