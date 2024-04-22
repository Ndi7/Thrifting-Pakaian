<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.navbar')

@section ('title', 'Katalog')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">
                <div class="px-20 my-10 justify-center">
                    <div class="sm:flex flex-wrap text-center justify-center gap-4 pt-20 text-left m-auto">
                        <div class="w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos1.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 50000</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos2.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Kaos Oversize Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 75000</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos3.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Polo</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 55000</h3>
                            </div>
                        </div>
                        <div class="w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/celana1.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Celana Jeans Modif</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 100000</h3>
                            </div>
                        </div>
                    </div>


                      <div class="text-center pt-40 pb-5">
                        <p class="font-bold text-xl">KOLEKSI PRODUK</p>
                        <p>Koleksi terbaik untuk kamu</p>
                    </div>
                    <div class="containercrsl">
                        <div class="carousel-container">
                            <div class="gallerycrsl carousel-slide">
                                <div class="gallerycrsl-container">
                                    <img class="gallerycrsl-item gallerycrsl-item-1 carousel-item" src="{{ asset('images/kaos4.jpg') }}" data-index="1" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-2 carousel-item" src="{{ asset('images/kaos3.jpg') }}" data-index="2" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-3 carousel-item" src="{{ asset('images/kaos2.jpg') }}" data-index="3" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-4 carousel-item" src="{{ asset('images/celana5.jpg') }}" data-index="4" alt="">
                                    <img class="gallerycrsl-item gallerycrsl-item-5 carousel-item" src="{{ asset('images/celana3.jpg') }}" data-index="5" alt="">
                                </div>
                                <div class="gallerycrsl-controls"></div>
                            </div>
                        </div>
                        <script src="{{ asset('js/crsl.js') }}"></script>
                    </div>

                    <!-- Katalog Produk Promo -->
                    <div class="py-3">
                        <p class="font-bold my-0">Produk Promo</p>
                        <p>promosi produk yang menarik untuk Style Kamu</p>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-5 container md:justify-center gap-y-3 gap-x-48 md:gap-x-1 text-left m-auto">
                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/celana1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/celana5.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/celana2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos4.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md cursor-pointer" id="card">
                            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        
                    </div>
                    
                </div>
            </div>
@endsection