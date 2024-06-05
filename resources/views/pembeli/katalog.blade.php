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
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg cursor-pointer" id="">
                            <img class="w-60 h-60" src="{{ asset('images/kaos1.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 50000</h3>
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg cursor-pointer" id="">
                            <img class="w-60 h-60" src="{{ asset('images/kaos2.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">Kaos Oversize Harley Davidson</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 75000</h3>
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg cursor-pointer" id="">
                            <img class="w-60 h-60" src="{{ asset('images/kaos3.jpg') }}" alt=""><br>
                            <div class="mx-1 -mt-5">
                                <h2 class="text-base font-bold">T-Shirt Polo</h2>
                                <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 55000</h3>
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg cursor-pointer" id="">
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

                    
                </div>
        
        <!-- Produk Pakaian Atas -->
        <div class="py-3">
        @if(isset($dtPA))
            <p class="font-bold my-0">Pakaian Atas</p>
        </div>
        <div class="bg-red--200 pakaianatas grid grid-cols-5 md:grid-cols-5 container md:justify-center gap-y-3 gap-x-48 md:gap-x-1 text-left m-auto" id="">
            
            @foreach ($dtPA as $produk)
                <div class="card rounded-none w-48 h-fit bg-slate-100 shadow-md" id="card">
                    <img class="w-full h-52" src="{{ asset('images/PA/'. $produk->gambar) }}" alt="">
                    <div class="m-1 flex-wrap gap-2">
                        <h2 class="text-xs font-bold">{{$produk->nama_produk_pa}}</h2>
                        <h3 class="text-sm my-1">Rp. {{$produk->harga_pa}}</h3>
                        <div class=" flex flex-wrap w-full">
                            <a href="{{ url('detail-produk',$produk->id) }}" class="w-1/2">
                            <button class="bg-white/80 hover:bg-white w-20 px-3 py-1 ml-1  rounded-md text-xs font-semibold">
                            Detail
                            </button>
                            </a>
                            <a href="{{ url('checkout-produk',$produk->id) }}">
                            <button class="bg-lawngreen/80 hover:bg-lawngreen w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold">
                            Beli
                            </button>
                            </a>
                        </div>
                    </div>  
                </div>
            @endforeach
            
                </div>
                <button id="showAllBtn" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90"><h1>Tampilkan semua pakaian atas...</h1></button>
                <button id="hideAllBtn" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90" style="display: none;"><h1>Sembunyikan</h1></button>
                <script src="{{ asset('js/tampilkansemua.js') }}"></script>
                <br><br><br>
        @endif

        <!-- Katalog Pakaian Bawah -->
        <div class="py-3">
        @if(isset($dtPB))
            <p class="font-bold">Pakaian Bawah</p>
        </div>
        <div class="pakaianbawah grid grid-cols-5 md:grid-cols-5 container md:justify-center gap-y-3 gap-x-48 md:gap-x-1 text-left m-auto" id="">
        @foreach ($dtPB as $produk)
            <div class="card rounded-none w-48 h-fit bg-slate-100 shadow-md cursor-pointer" id="card">
                <img class="w-full h-52" src="{{ asset('images/PB/'. $produk->gambar) }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-xs font-bold">{{$produk->nama_produk_pb}}</h2>
                    <h3 class="text-sm my-1">Rp. {{$produk->harga_pb}}</h3>
                    <div class=" flex flex-wrap w-full">
                            <a href="{{ url('detail-produk-pakaianbawah',$produk->id) }}" class="w-1/2">
                            <button class="bg-white/80 hover:bg-white w-20 px-3 py-1 ml-1  rounded-md text-xs font-semibold">
                            Detail
                            </button>
                            </a>
                            <a href="{{ url('checkout-produk',$produk->id) }}">
                            <button class="bg-lawngreen/80 hover:bg-lawngreen w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold">
                            Beli
                            </button>
                            </a>
                        </div>
                </div>  
            </div>
            @endforeach
                </div>
                <button id="showAllBtnbawah" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90"><h1>Tampilkan semua pakaian bawah...</h1></button>
                <button id="hideAllBtnbawah" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90" style="display: none;"><h1>Sembunyikan</h1></button>
                <script src="{{ asset('js/tampilkansemua.js') }}"></script>
        @endif
        </div>
    </div><br>

</div>
</div>
@endsection