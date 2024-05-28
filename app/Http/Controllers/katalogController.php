<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\PakaianatasController;
use App\Http\Controllers\PakaianbawahController;

class katalogController extends Controller
{
    protected $pakaianatasController;
    protected $pakaianBawahController;

    public function __construct(PakaianatasController $pakaianatasController, PakaianbawahController $pakaianbawahController)
    {
        $this->pakaianatasController = $pakaianatasController;
        $this->pakaianbawahController = $pakaianbawahController;
    }
    
    public function index()
    {
        $dtPA = $this->pakaianatasController->katalog();
        $dtPB = $this->pakaianbawahController->katalog();

        return view('pembeli.katalog', compact('dtPA', 'dtPB'));
    }
}
