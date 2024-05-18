<?php

namespace App\Http\Controllers;
use App\Models\Category;

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ktgr = Category::findorfail($id);
        return view('penjual.kategori.edit-kategori', compact('ktgr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ktgr = Category::findorfail($id);
        $ktgr->update($request->all());
        return redirect('data-kategori')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
