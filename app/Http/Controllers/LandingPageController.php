<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function landingPage()
    {
        return view('pembeli.landingpage');
    }
}
