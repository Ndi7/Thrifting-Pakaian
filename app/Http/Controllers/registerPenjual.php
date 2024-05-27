<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerPenjual extends Controller
{
    function register()
    {
        return view('penjualRegister');
    }

    function create(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'name'=>'required|unique:users',
            'nama_toko'=>'required|unique:users',
            'password'=> 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ],[
            'email.required'=> 'Email wajib diisi',
            'name.required'=> 'Nama wajib diisi',
            'namaToko.required'=> 'Isi nama toko',
            'email.email'=> 'Silahkan masukkan email yang valid',
            'email.unique'=> 'Email sudah pernah digunakan, silahkan isi alamat yang lain',
            'name.unique'=> 'Nama sudah pernah digunakan, silahkan isi nama yang lain',
            'nama_toko.unique'=> 'Nama Toko sudah pernah digunakan, silahkan isi Nama Toko yang lain',
            'password.required'=> 'Password wajib diisi',
            'password.min'=> 'Minimum password 6 karakter',
            'password_confirmation.required' =>'Password tidak sama',
        ]);


        $data = [
            'email'=> $request->email,
            'name'=> $request->name,
            'nama_toko'=> $request->nama_toko,
            'password'=> Hash::make($request->password),
            'level' => 'penjual'
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];


        if(Auth::attempt($infologin)){
            //kalau autentikasi sukses
            $berhasilMessage =  "Akun " . Auth::user()->name . "berhasil didaftarkan! Silakan login.";
            return redirect('login')->with('berhasil', $berhasilMessage);
        }else{
            //kalu autentikasi gagal
            $gagalMessage = 'Login gagal. Periksa kembali email dan password anda.';
            return redirect('penjualregister')->withErrors(['gagal' => $gagalMessage]);


        }
    }
}
