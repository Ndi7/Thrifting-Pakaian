<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtKategori = Category::all();

        return view('penjual.kategori.kategori',compact('dtKategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.kategori.create-kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Category::create([
            'id' => $request->id,
            'nama_kategori' => $request->kategori,
        ]);

        return redirect('data-kategori')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $ktgr = Category::findorfail($id);
        return view('penjual.kategori.edit-kategori',compact('ktgr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('kategori')
        ->where('id', $id)
        ->update([
            'nama_kategori' => $request->input('kategori'),
            // field lainnya
        ]);

        return redirect('data-kategori')->with('success', 'Data Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ktgr = Category::findorfail($id);
        $ktgr->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
