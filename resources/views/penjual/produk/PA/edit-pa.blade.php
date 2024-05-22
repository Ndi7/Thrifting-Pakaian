<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Kategori')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="" class="bg-white m-4 h-full p-4 mt-14">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h1 class="text-lg font-semibold text-gray-900 dark:text-white">
            Ubah Produk
        </h1>
        </div>
        <div>
            <!-- Modal katalog body -->
            <form class="p-4 md:p-5" method="POST" action="{{ route('update-pakaianatas', $dtPA->id) }}">
            {{ csrf_field() }}
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-3">
                    <!-- <label for="Kpakaianatas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="Kpakaianatas" id="Kpakaianatas" class="bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pakaian Atas" required="" disabled> -->
                        <!-- <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih kategori</option>
                            <option value="PA">Pakaian Atas</option>
                            <option value="PB">Pakaian Bawah</option>
                            <option value="SS">Sepatu/ Sandal</option>
                        </select> -->
                    </div>
                    <div class="col-span-3 sm:col-span-1">
                        <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" value="{{ $dtPA->nama_produk_pa }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik nama produk" required="">
                    </div>
                    <div class="col-span-3 sm:col-span-1">
                        <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="text" name="stok" id="stok" value="{{ $dtPA->stok }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik jumlah produk" required="">
                    </div>
                    <div class="col-span-3 sm:col-span-1">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" id="harga" value="{{ $dtPA->harga_pa }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp 10000" required="">
                    </div>    
                    <div class="col-span-3">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi produk</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lawngreen focus:border-lawngreen dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{ $dtPA->deskripsi_pa }}
                        </textarea>
                    </div>
                    <!-- <div class="col-span-3">
                        <label for="images" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tambahkan Gambar</label>
                        <table id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                        <input class="" type="file" name="fileToUpload" id="fileToUpload">
                        </table>
                        <div id="preview"></div>
                    </div> -->
                </div>
                <button type="" class="inline-flex items-center bg-lawngreen hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-lawngreen font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>
@endsection