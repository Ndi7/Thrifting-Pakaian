<?php

// NO NAME
use App\Http\Controllers\checkout;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\DataBarang;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\layoutlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singleproduk;
// NO NAME



// CLASS ROUTE BUYER
use App\Http\Controllers\detailpesanan;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerPenjual;
use App\Http\Controllers\checkoutberhasil;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\registerController;

// CLASS ROUTE SELLER
use App\Http\Controllers\keranjangController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PakaianatasController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PakaianbawahController;
use App\Http\Controllers\SepatusandalController;
use App\Http\Controllers\ProfilepenjualController;
use Symfony\Component\HttpKernel\Profiler\Profile;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});


//route login
Route::get('/login',[loginController::class,'index']);
Route::post('/login/home', [loginController::class, 'login'])->name('login.loginPost');

//route logout
Route::get('/login/logout', [loginController::class, 'logout']);

//route register pembeli
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register/create', [registerController::class, 'create'])->name('register.registerPost');

//route register penjual
Route::get('/penjualregister', [registerPenjual::class, 'register'])->name('penjualregister')->middleware('guest');
Route::post('/penjualregister/create', [registerPenjual::class, 'create'])->name('penjualregister.penjualregisterPost');




//midlleware penjual
Route::group(['middleware' => ['auth','level:penjual']], function(){

    // ROUTE DASHBOARD
    Route::get('/dashboard', [dashboard::class, 'index']);

    // ROUTE KATEGORI
    Route::get('/data-kategori',[KategoriController::class, 'index'])->name('data-kategori');
    Route::get('/create-kategori',[KategoriController::class, 'create'])->name('create-kategori');
    Route::post('/simpan-kategori',[KategoriController::class, 'store'])->name('simpan-kategori');
    Route::get('/edit-kategori/{id}',[KategoriController::class, 'edit'])->name('edit-kategori');
    Route::post('/update-kategori/{id}',[KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/delete-kategori/{id}',[KategoriController::class, 'destroy'])->name('delete-kategori');
    // Route::post('update-kategori/{id}', 'KategoriController@update')->name('update-kategori');

    // ROUTE PRODUK PAKAIAN ATAS
    Route::get('/data-pakaianatas',[PakaianatasController::class, 'index'])->name('data-pakaianatas');
    // Route::get('/katalog',[PakaianatasController::class, 'katalog'])->name('katalog');
    Route::get('/create-pakaianatas',[PakaianatasController::class, 'create'])->name('create-pakaianatas');
    Route::post('/simpan-pakaianatas',[PakaianatasController::class, 'store'])->name('simpan-pakaianatas');
    Route::get('/edit-pakaianatas/{id}',[PakaianatasController::class, 'edit'])->name('edit-pakaianatas');
    Route::post('/update-pakaianatas/{id}',[PakaianatasController::class, 'update'])->name('update-pakaianatas');
    Route::get('/delete-pakaianatas/{id}',[PakaianatasController::class, 'destroy'])->name('delete-pakaianatas');

    // ROUTE PRODUK PAKAIAN BAWAH
    Route::get('/data-pakaianbawah',[PakaianbawahController::class, 'index'])->name('data-pakaianbawah');
    // Route::get('/katalog',[PakaianbawahController::class, 'katalog'])->name('katalog');
    Route::get('/create-pakaianbawah',[PakaianbawahController::class, 'create'])->name('create-pakaianbawah');
    Route::post('/simpan-pakaianbawah',[PakaianbawahController::class, 'store'])->name('simpan-pakaianbawah');
    Route::get('/edit-pakaianbawah/{id}',[PakaianbawahController::class, 'edit'])->name('edit-pakaianbawah');
    Route::post('/update-pakaianbawah/{id}',[PakaianbawahController::class, 'update'])->name('update-pakaianbawah');
    Route::get('/delete-pakaianbawah/{id}',[PakaianbawahController::class, 'destroy'])->name('delete-pakaianbawah');

    // ROUTE PRODUK SEPATU SANDAL
    // Route::get('/data-sepatusandal',[SepatusandalController::class, 'index'])->name('data-sepatusandal');
    // Route::get('/create-sepatusandal',[SepatusandalController::class, 'create'])->name('create-sepatusandal');
    // Route::post('/simpan-sepatusandal',[SepatusandalController::class, 'store'])->name('simpan-sepatusandal');
    // Route::get('/edit-sepatusandal/{id}',[SepatusandalController::class, 'edit'])->name('edit-sepatusandal');
    // Route::post('/update-sepatusandal/{id}',[SepatusandalController::class, 'update'])->name('update-sepatusandal');
    // Route::get('/delete-sepatusandal/{id}',[SepatusandalController::class, 'destroy'])->name('delete-sepatusandal');


    // ROUTE PROFILE PENJUAL
    Route::get('/data-profile',[ProfilepenjualController::class, 'index'])->name('data-profile');
    Route::get('/create-profile',[ProfilepenjualController::class, 'create'])->name('create-profile');
    Route::post('/simpan-profile',[ProfilepenjualController::class, 'store'])->name('simpan-profile');
    Route::get('/edit-profile/{id}',[ProfilepenjualController::class, 'edit'])->name('edit-profile');
    Route::post('/update-profile/{id}',[ProfilepenjualController::class, 'update'])->name('update-profile');
    Route::get('/delete-profile/{id}',[ProfilepenjualController::class, 'destroy'])->name('delete-profile');
});

//midlleware pembeli
Route::group(['middleware' => ['auth','level:pembeli']], function(){

    // ROUTE LANDING PAGE
    Route::get('/landingpage', [LandingPageController::class, 'landingPage']);


    Route::get('/singleproduk', [singleproduk::class, 'index']);
    Route::get('/keranjang', [keranjangController::class, 'index']);
    Route::get('/checkout', [checkoutController::class, 'index']);
    Route::get('/checkoutberhasil', [checkoutberhasil::class, 'index']);
    Route::get('/detailpesanan', [detailpesanan::class, 'index']);
    Route::get('/user', [UserProfileController::class, 'index']);
    Route::get('/detail-produk/{id}',[PakaianatasController::class, 'detailproduk'])->name('detail-produk');
    Route::get('/detail-produk-pakaianbawah/{id}',[PakaianbawahController::class, 'detailproduk'])->name('detail-produk-pakaianbawah');


    Route::get('/userprofile', function () {
        return view('user');});

    // ROUTE KATALOG (GABUNGAN CONTROLLER PAKAIAN ATAS DAN PAKAIAN BAWAH)
    Route::get('/katalog',[katalogController::class, 'index'])->name('katalog');

    Route::post('/checkout', [checkoutController::class, 'store'])->name('checkout.store');
    

});



