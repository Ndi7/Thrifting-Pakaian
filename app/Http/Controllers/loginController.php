<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function index()
    {
        return view("login");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'email.email'=> 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];


        if(Auth::attempt($infologin)){
            //kalau autentikasi sukses
            return redirect('/landingpage');
        }else{
            //kalu autentikasi gagal
            $errorMessage = 'Login gagal. Periksa kembali email dan password anda.';
            return redirect('login')->withErrors(['eror' => $errorMessage]);


        }
    }

    function logout() {
        Auth::logout();
        return redirect('login')->with('success','Berhasil logout');
    }
}
