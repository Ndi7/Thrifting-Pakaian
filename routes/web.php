<?php

use App\Http\Controllers\DataBarang;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Barang', [DataBarang::class, 'tampilkan']);

// // Route dashboar
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// // CRUD produk
// Route::get('/product', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('product');

// //  about
// Route::get('/about', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('about');

// //  contact
// Route::get('/contact', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('contact');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

//
//Route::get('/user/{id}', function ($id) {
//    return 'User dengan ID ' . $id;
//});
//
//Route::prefix('admin')->group(function () {
//    Route::get('/dashboard', function () {
//        return 'Admin Dashboard';
//    });
//
//    Route::get('/users', function () {
//        return 'Admin Users';
//    });
//});
//Route::get('/', [ProductController::class, 'index'])->name('home');
//
//Route::get('/listbarang/{id}/{nama}', function($id,$nama){
//    return view('list_barangthrift', compact('id', 'nama'));
//});
//
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);
//
//Route::get('/welcome', function () {
//    return view('welcome');
//})
//Route::get('/user/{id}', function ($id) {
//    return 'User dengan ID ' . $id;
//})
//Route::prefix('admin')->group(function () {
//    Route::get('/dashboard', function () {
//        return 'Admin Dashboard';
//    });
//
//    Route::get('/users', function () {
//        return 'Admin Users';
//    });
//})
//Route::get('/listbarang/{id}/{nama}', function($id,$nama){
//    return view('list_barangthrift', compact('id', 'nama'));
//})
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact'])
//