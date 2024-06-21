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
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg" id="">
                            <img class="w-60 h-64 -mb-2" src="{{ asset('images/kaos1.jpg') }}" alt=""><br>
                            <div class="my-2">
                                <h2 class="text-base font-bold">T-Shirt Harley Davidson</h2>
                                <!-- <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 50000</h3> -->
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg" id="">
                            <img class="w-60 h-64 -mb-2" src="{{ asset('images/kaos2.jpg') }}" alt=""><br>
                            <div class="my-2">
                                <h2 class="text-base font-bold">Kaos Oversize Harley Davidson</h2>
                                <!-- <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 75000</h3> -->
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg" id="">
                            <img class="w-60 h-64 -mb-2" src="{{ asset('images/kaos3.jpg') }}" alt=""><br>
                            <div class="my-2">
                                <h2 class="text-base font-bold">T-Shirt Polo</h2>
                                <!-- <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 55000</h3> -->
                            </div>
                        </div>
                        <div class=" rounded-none w-60 bg-slate-200 shadow-lg" id="">
                            <img class="w-60 h-64 -mb-2" src="{{ asset('images/celana1.jpg') }}" alt=""><br>
                            <div class="my-2">
                                <h2 class="text-base font-bold">Celana Jeans Modif</h2>
                                <!-- <h4 class="text-xs">Deskripsi singkat</h4>
                                <h3 class="text-sm my-1">Rp. 100000</h3> -->
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
        <div class="pakaianatas grid grid-cols-5 md:grid-cols-5 container md:justify-center gap-y-3 gap-x-48 md:gap-x-1 text-left m-auto" id="">

            @foreach ($dtPA as $produk)
            @if ($produk->stok > 0)
                <div class="rounded-none w-48 h-fit bg-slate-100 shadow-md" id="card">
                    <img class="w-full h-52 " src="{{ asset('images/PA/'. $produk->gambar) }}" alt="">

                    <div class="m-1 flex-wrap gap-2">
                        <h2 class="text-xs font-bold">{{$produk->nama_produk_pa}}</h2>
                        <h3 class="text-sm my-1">Rp. {{$produk->harga_pa}}</h3>
                        <div class=" flex flex-wrap w-full">
                            <a href="{{ url('detail-produk',$produk->id) }}" class="w-1/2">
                                <button class="bg-white/80 hover:bg-white w-20 px-3 py-1 ml-1  rounded-md text-xs font-semibold">
                                Detail
                                </button>
                                    <a href="{{ url('checkout-produk', $produk->id) }}">
                                        <button class="bg-lawngreen/80 hover:bg-lawngreen w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold">
                                            Beli
                                        </button>
                                    </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            @foreach ( $dtPA as $produk )
            @if ($produk->stok <= 0)
            <div class="rounded-none w-48 h-fit bg-slate-100 shadow-md relative" id="card">
                <img class="w-full h-52" src="{{ asset('images/PA/'. $produk->gambar) }}" alt="Gambar Produk">
                <img class="absolute top-0 left-0 w-full h-52" src="{{ asset('images/soldout.png') }}" alt="Sold Out">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-xs font-bold">{{$produk->nama_produk_pa}}</h2>
                    <h3 class="text-sm my-1">Rp. {{$produk->harga_pa}}</h3>
                    <div class=" flex flex-wrap w-full">
                        <span class="bg-gray-300 text-gray-700 text-center w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold disabled">
                            Terjual
                        </span>
                    </div>
                </div>
            </div>

            @endif
            @endforeach


                </div>
                <button id="showAllBtn" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90">
                    <h1 class="inline-flex items-center">
                        Tampilkan semua
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512" width="20" height="20" class="ml-2"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                    </h1>
                </button>

                <button id="hideAllBtn" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90" style="display: none;">
                    <h1 class="inline-flex items-center">
                    Sembunyikan
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512" width="20" height="20" class="mr-2"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                    </h1>
                </button>
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
        @if ($produk->stok > 0)
            <div class="rounded-none w-48 h-fit bg-slate-100 shadow-md" id="card">
                <img class="w-full h-52" src="{{ asset('images/PB/'. $produk->gambar) }}">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-xs font-bold">{{$produk->nama_produk_pb}}</h2>
                    <h3 class="text-sm my-1">Rp. {{$produk->harga_pb}}</h3>
                    <div class=" flex flex-wrap w-full">
                            <a href="{{ url('detail-produk-pakaianbawah',$produk->id) }}" class="w-1/2">
                                <button class="bg-white/80 hover:bg-white w-20 px-3 py-1 ml-1  rounded-md text-xs font-semibold">
                                Detail
                                </button>
                                </a>
                                    <a href="{{ url('checkout-produk-pakaianbawah', $produk->id) }}">
                                        <button class="bg-lawngreen/80 hover:bg-lawngreen w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold">
                                            Beli
                                        </button>
                                    </a>
                        </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach ($dtPB as $produk)
            @if ($produk->stok <= 0)

            <div class="rounded-none w-48 h-fit bg-slate-100 shadow-md relative" id="card">
                <img class="w-full h-52" src="{{ asset('images/PB/'. $produk->gambar) }}" alt="Gambar Produk">
                <img class="absolute top-0 left-0 w-full h-52" src="{{ asset('images/soldout.png') }}" alt="Sold Out">
                <div class="m-1 flex-wrap gap-2">
                    <h2 class="text-xs font-bold">{{$produk->nama_produk_pb}}</h2>
                    <h3 class="text-sm my-1">Rp. {{$produk->harga_pb}}</h3>
                    <div class=" flex flex-wrap w-full">
                        <span class="bg-gray-300 text-gray-700 text-center w-20 flex-grow py-1 mr-1 rounded-md text-xs font-semibold disabled">
                            Terjual
                        </span>
                    </div>
                </div>
            </div>
            </div>
            @endif
            @endforeach
                </div>
                <button id="showAllBtnbawah" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90">
                    <h1 class="inline-flex items-center">
                    Tampilkan semua
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512" width="20" height="20" class="ml-2"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                    </h1>
                </button>
                <button id="hideAllBtnbawah" class="text-blue-500/90 w-48 font-thin text-left underline underline-offset-4 decoration-blue-500/90" style="display: none;">
                    <h1 class="inline-flex items-center">
                    Sembunyikan
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512" width="20" height="20" class="mr-2"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                    </h1>
                </button>
                <script src="{{ asset('js/tampilkansemua.js') }}"></script>
        @endif
        </div>
    </div><br>

</div>
</div>
@endsection
