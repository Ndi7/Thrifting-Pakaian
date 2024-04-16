<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/crslsingle.js') }}"></script>
@extends('layout.navbar')

@section('title', 'Single Produk')
@section('content')
<div class="bg-green-200 container mx-auto px-5 my-10 justify-center">

    <!--Layout Second Hand-->
    <div class="bg-blue-100 container mx-auto px-20 my-10 justify-center">
        <h2 class="font-bold mt-5">Second Hand</h2>
        <p class="">Tetaplah cerdas dengan pilihan Thrift mu</p>

        <!--Carousel dan details-->
        <div class="bg-red-100 flex max-h-96">
            <!--Carousel-->
            <div class="bg-green-400 flex-wrap w-2/5 justify-between overflow-hidden items-center">
                <div class="main-pic bg-slate-400 container h-72 mx-auto overflow-hidden">
                    <div class="h-auto w-auto m-auto"><img src="{{ asset('images/kaos1.jpg') }}" alt="" id="mainPic1"></div>
                    <div class="h-auto w-auto m-auto"><img src="{{ asset('images/kaos2.jpg') }}" alt="" id="mainPic2"></div>
                    <div class="h-auto w-auto m-auto"><img src="{{ asset('images/kaos3.jpg') }}" alt="" id="mainPic3"></div>
                    <div class="h-auto w-auto m-auto"><img src="{{ asset('images/kaos4.jpg') }}" alt="" id="mainPic4"></div>
                </div>
                <div class="nav-pic bg-slate-100 h-24 mt-2 flex flex-wrap justify-between">
                    <div class="navImage h-24 w-24 m-auto"><img src="{{ asset('images/kaos1.jpg') }}" alt="" data-target="mainPic1"></div>
                    <div class="navImage h-24 w-24 m-auto"><img src="{{ asset('images/kaos2.jpg') }}" alt="" data-target="mainPic2"></div>
                    <div class="navImage h-24 w-24 m-auto"><img src="{{ asset('images/kaos3.jpg') }}" alt="" data-target="mainPic3"></div>
                    <div class="navImage h-24 w-24 m-auto"><img src="{{ asset('images/kaos4.jpg') }}" alt="" data-target="mainPic4"></div>
                </div>
            </div>
            
            <!--Carousel-->

            <!--Detail-->
            <div class="w-2/3 bg-slate-100/80 ml-2 max-h-96">
                <div class="m-4 font-semibold">
                    <div class="mb-3">
                        <h1 class="text-xl mb-3">Kaos Oversize Harley Davidson</h1>
                        <div class="flex gap-4 font-normal">
                            <h2 class="text-3xl font-bold mb-10">Rp. 75000</h2>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="flex flex-wrap mb-3">
                            <div class="w-24 h-10 flex items-center">
                                <h2>Warna</h2>
                            </div>
                            <div class="flex flex-wrap justify-center items-center">
                                <div class="w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button class="no-underline hover:underline underline-offset-8 decoration-white">Hitam</button>
                                </div>
                                <div class="w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button class="no-underline hover:underline underline-offset-8 decoration-white">Putih</button>
                                </div>
                                <div class="w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button class="no-underline hover:underline underline-offset-8 decoration-white">Random</button>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <div class="w-24 h-10 flex items-center">
                                <h2>Size</h2>
                            </div>
                            <div class="flex flex-wrap justify-center items-center">
                                <div class="border border-2 border-black w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button>M</button>
                                </div>
                                <div class="border border-2 border-black w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button>L</button>
                                </div>
                                <div class="border border-2 border-black w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button>XL</button>
                                </div>
                                <div class="border border-2 border-black w-16 h-10 mr-1 flex justify-center items-center cursor-pointer">
                                    <button>XXL</button>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <div class="w-24 h-10 flex items-center">
                                <h2>Kuantitas</h2>
                            </div>
                            <div class="flex flex-wrap justify-center items-center">
                                <div class="">
                                    <input class="h-10 w-16" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center m-auto mt-12">
                    <button class="bg-black text-white rounded-md w-full m-1 font-semibold">Masukkan Keranjang</button>
                    <button class="bg-lawngreen rounded-md w-full m-1 font-semibold">Checkout</button>
                </div>
            </div>
            <!--Detail-->
        </div>
        <!--Carousel dan details-->    
    </div>
    <!--Layout Second Hand-->

    <!-- Katalog Produk Promo -->
    <div class="bg-green-100 py-3 px-20">
        <p class="font-bold my-0">Produk Promo</p>
        <p>promosi produk yang menarik untuk Style Kamu</p>
    </div>

    <div class="bg-blue-200 grid grid-cols-5 container sm:justify-center gap-y-3 gap-x-1 px-20 text-left m-auto">
        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/celana1.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/celana5.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/celana2.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos4.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>

        <div class=" w-48 h-fit bg-slate-200 shadow-md">
            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-sm font-bold">Nama pakaian</h2>
                    <h3 class="text-sm my-1">Harga</h3>
                    <div class=" flex flex-wrap">
                    <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Beli</span>
                    </button>
                    <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                    <span>Masukan Keranjang</span>
                    </button>
                </div>
            </div>  
        </div>
    </div>
    <!-- Katalog Produk Promo -->

</div>

@endsection