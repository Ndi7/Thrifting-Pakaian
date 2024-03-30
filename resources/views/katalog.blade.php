<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
@extends('layout.navbar')

@section ('title', 'Katalog')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center bg">
                <div class="container mx-auto px-60 my-10 justify-center">
                    <div class="sm:flex flex-wrap container sm:justify-center text-center gap-3 text-left m-auto">
                        <div class="w-60 bg-slate-300 shadow-lg">
                            <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Nama pakaian</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Harga</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg">
                            <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Nama pakaian</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Harga</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg">
                            <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Nama pakaian</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Harga</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg">
                            <img src="{{ asset('images/contoh.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Nama pakaian</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Harga</h3>
                            </div>
                        </div>
                    </div>

                      <div class="text-center py-10">
                        <p class="font-bold text-xl">KOLEKSI PRODUK</p>
                        <p>Koleksi terbaik untuk kamu</p>
                    </div>
                    <div class="containercrsl">
                        <div class="carousel-container">
                            <div class="gallerycrsl carousel-slide">
                                <div class="gallerycrsl-container">
                                    <img class="gallerycrsl-item gallerycrsl-item-1 carousel-item" src="{{ asset('images/crsl1.png') }}" data-index="1" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-2 carousel-item" src="{{ asset('images/crsl2.jpg') }}" data-index="2" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-3 carousel-item" src="{{ asset('images/crsl3.jpg') }}" data-index="3" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-4 carousel-item" src="{{ asset('images/crsl4.jpg') }}" data-index="4" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-5 carousel-item" src="{{ asset('images/crsl5.jpg') }}" data-index="5" alt="">
                                </div>
                                <div class="gallerycrsl-controls"></div>
                            </div>
                        </div>
                        <script src="{{ asset('js/crsl.js') }}"></script>
                    </div>

                    <!-- Katalog Produk Promo -->
                    <div class="py-3 px-3">
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
@endsection