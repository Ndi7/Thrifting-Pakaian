<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //form isian email dan password
    function index()
    {
        return view("login");
    }

    //authentikasi bagian fungsi index
    function login(request $request)
    {
        $request->validate([
            'email' => 'required',
            'pass' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'pass.required' => 'password wajib diisi'
        ]);

        //validasi sukses
        $infologin = [
            'email' => $request->email,
            'pass' => $request->pass
        ];

        if (Auth::attempt($infologin)) {
            $message = 'sukses'; // Set success message
            return redirect()->intended('dashboard')->with('message', $message); // Redirect to intended route (e.g., dashboard) with message
        } else {
            $message = 'gagal'; // Set fail message
            return redirect()->back()->with('message', $message); // Redirect back with message
        }
    }
}
