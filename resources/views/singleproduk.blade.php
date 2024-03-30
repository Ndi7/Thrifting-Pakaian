<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crslsingle.css') }}">
@extends('layout.navbar')

@section ('title', 'Single Produk')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">
            <div class="container mx-auto px-60 my-10 justify-center">
                <div class="py-3">
                    <p class="font-bold text-xl my-0">SECOND HAND</p>
                    <p>Tetaplah cerdas dengan pilihan Thrift mu</p>
                    <div class="flex container">
                        <div class="flex-wrap gap-4 w-2/3 justify-between">
                            <div class="containercrslsingle">
                                <div class="carouselsingle-container">
                                    <div class="slider gallerycrslsingle">
                                       <div class="slides">
                                        <input type="radio" name="radio-btn" id="radio1">   
                                        <input type="radio" name="radio-btn" id="radio2">   
                                        <input type="radio" name="radio-btn" id="radio3">   
                                        <input type="radio" name="radio-btn" id="radio4">   
                                        <input type="radio" name="radio-btn" id="radio5">

                                        <div class="slide first">
                                            <img src="{{ asset('images/crsl1.png') }}" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('images/crsl2.jpg') }}" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('images/crsl3.jpg') }}" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('images/crsl4.jpg') }}" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('images/crsl5.jpg') }}" alt="">
                                        </div

                                        <!--Carousel AUTO-->
                                        <div class="navigation-auto">
                                            <div class="auto-btn1"></div>
                                            <div class="auto-btn2"></div>
                                            <div class="auto-btn3"></div>
                                            <div class="auto-btn4"></div>
                                            <div class="auto-btn5"></div>
                                        </div>
                                       </div>
                                       
                                       <!--Carousel MANUAL-->
                                       <div class="navigation-manual">
                                            <label for="radio1" class="manual-btn"></label>
                                            <label for="radio2" class="manual-btn"></label>
                                            <label for="radio3" class="manual-btn"></label>
                                            <label for="radio4" class="manual-btn"></label>
                                            <label for="radio5" class="manual-btn"></label>
                                       </div>
                                    </div>
                                </div>
                                <script src="{{ asset('js/crslsingle.js') }}"></script>
                            </div>
                        </div>


                        <div class="w-1/3 bg-slate-200 h-72">
                             <div class="m-4 font-semibold">
                             <div class="mb-3">
                                <h2>Ukuran</h2>
                             <div class="flex gap-4 font-normal">
                             <button class="bg-transparent hover:bg-white rounded-md w-6 transition duration-300 hover:duration-500"><h2>S</h2></button>
                             <button class="bg-transparent hover:bg-white rounded-md w-6 transition duration-300 hover:duration-500"><h2>M</h2></button>
                             <button class="bg-transparent hover:bg-white rounded-md w-6 transition duration-300 hover:duration-500"><h2>L</h2></button>
                             <button class="bg-transparent hover:bg-white rounded-md w-6 transition duration-300 hover:duration-500"><h2>XL</h2></button>
                             <button class="bg-transparent hover:bg-white rounded-md w-8 transition duration-300 hover:duration-500"><h2>XXL</h2></button>
                             </div>
                             </div>
                             <div class="mb-3">
                                <h2>Warna</h2>
                                <div class="flex col columns-6 font-normal">
                                    <table>
                                        <button class="mr-2"><h2>Hitam</h2></button>
                                        <button class="mr-2"><h2>Putih</h2></button>
                                        <button><h2>Random</h2></button>
                                    </table>
                                </div>
                             </div>
                             <div class="mb-3">
                                <h2>Harga</h2>
                             <table>
                               <h2 class="font-normal">xxx.xxx.xx</h2>
                            </table>
                             </div>
                             </div>
                             <div class="flex justify-center h-10 mt-12 gap-10 font-semibold text-lg">
                                 <button class="bg-black text-white w-32 rounded-md">Add to Cart</button>
                                 <button class="bg-white w-32 rounded-md">CHECKOUT</button>
                             </div>
                        </div>
                     </div>
                  
    
                <!-- Katalog Produk Promo -->
                <div class="pt-20 px-1">
                    <p class="font-bold text-lg my-0">Produk Promo.</p>
                    <p>promosi produk yang menarik untuk Style Kamu</p>
                </div>
                <div class="sm:flex flex-wrap container sm:justify-center gap-2 text-left shadow-lg m-auto">
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