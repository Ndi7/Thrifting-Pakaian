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
                        <div class="card rounded-none w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos1.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 50000</h3>
                            </div>
                        </div>
                        <div class="card rounded-none w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos2.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Kaos Oversize Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 75000</h3>
                            </div>
                        </div>
                        <div class="card rounded-none w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
                            <img class="w-60 h-60" src="{{ asset('images/kaos3.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Polo</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 55000</h3>
                            </div>
                        </div>
                        <div class="card rounded-none w-60 bg-slate-300 shadow-lg cursor-pointer" id="card">
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
                    <br><br>
                    @include('component.pakaianatas')
                    @include('component.pakaianbawah')
                    @include('component.alaskaki')
 
                </div>
                </div>
      
            </div>
@endsection