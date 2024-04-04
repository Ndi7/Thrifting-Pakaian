<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
@extends('layout.navbar')

@section ('title', 'keranjang')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">
            <div class="container mx-auto px-60 my-10 justify-center">
                <div class="py-3">
                    <h2 class="font-bold text-2xl my-0 text-center">2ND CHANCE</h2><br>
                    <h2 class="font-bold text-xl">CART</h2>
                </div>
                <div class="flex container gap-7">
                   <div class="flex flex-wrap gap-4 w-3/5 mr-2 justify-between">
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                    <div class=" w-32 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-sm font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-xs font-semibold my-1">Harga</h3>
                        </div>
                    </div>
                   </div>
                   <div class="w-2/5 bg-slate-200 ml-2">
                        <div class="m-4 font-semibold">
                        <h2>Alamat</h2>
                        <input type="text">
                        <h2>Opsi Pengiriman</h2>
                        <form class="font-normal" name="formcek">
                            <select name="jurusan">
                                 <option value="GoSend Instant">Via Transfer
                                 <option value="Cash Of Delivery COD">Cash Of Delivery COD
                             </select>
                        </form>
                        <h2>Item</h2>
                        <input type="text">
                        <h2>Total Pesanan</h2>
                        <input type="text" disabled>
                        <h2>Biaya Pengiriman</h2>
                        <input type="text" disabled>
                        <h2>Code Voucher</h2>
                        <input type="text">
                        <h2>Potongan harga</h2>
                        <input type="text" disabled>
                        </div>
                        <div class="flex justify-center h-10 mt-7 gap-10 font-semibold text-xl">
                            <button class="bg-white w-32 rounded-md">CHECKOUT</button>
                            <button class="bg-black text-white w-32 rounded-md">CANCEL</button>
                        </div>
                   </div>
                </div>
                  
    
                <!-- Katalog Produk Promo -->
                <div class="pt-20 px-1">
                    <p class="font-bold text-lg my-0">Produk Promo.</p>
                    <p>promosi produk yang menarik untuk Style Kamu</p>
                </div>
                <div class="sm:flex flex-wrap container sm:justify-center gap-2 text-left m-auto">
                    <div class=" w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    <div class="w-48 bg-slate-300">
                        <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                        <div class="mx-1">
                            <h2 class="text-base font-bold">Nama pakaian</h2>
                            <h4 class="text-xs">Deskripsi singkat</h4>
                            <h3 class="text-sm my-1">Harga</h3>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection