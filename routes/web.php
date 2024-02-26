<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|
|    WEB ROTES
|
*/



Route::get('/', [ProductController::class, 'index'])->name('home');

<<<<<<< HEAD
=======
//Route::get('/listbarang/{id}/{nama}', function($id,$nama){
//    return view('list_barangthrift', compact('id', 'nama'));
//});

Route::get('/Listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
>>>>>>> 1ea2125bac659ee4b41469778b8e90bd5ae81de6

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