<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Kategori')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="" class="bg-white m-4 kategori-content h-full p-4 mt-14 overflow-auto">
   <h1 class="text-xl font-bold mb-5">Katalog produk</h1><br>
        
    
        <!-- dropdown kategori
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="mb-2 text-black bg-lawngreen hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-lawngreen font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="">Kategori<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button> -->

        <!-- Dropdown menu
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#pakaianatas" id="{id}" class="kategori-link block block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pakaian Atas</a>
                </li>
                <li>
                    <a href="#pakaianbawah" id="{id}" class="kategori-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pakaian Bawah</a>
                </li>
                <li>
                    <a href="#sepatusandal" id="{id}" class="kategori-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sepatu/Sandal</a>
                </li>
                </ul>
            </div>
        </div> -->
        
    <div class="flex items-center p-3 md:p-2 mb-3 border-b rounded-t dark:border-gray-600">
        <div>
            <h5 class="text-md text-gray-900 dark:text-white">
            Pakaian Atas
            </h5>
        </div>
        <div>
        <a href="{{ route('create-pa') }}">
            <!-- daftarin barang -->
            <!-- Modal toggle -->
            <button class="bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            <span class="">Tambah Produk +</span>
            </button>
        </a>
        </div>
    </div>
        <!-- KATEGORI PAKAIAN ATAS -->
    <div id="pakaianatas" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 active">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span></th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtProduk_pa as $produk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        xxxxxx
                    </th>
                    <td class="px-6 py-4">
                        {{ $produk->nama_produk }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->stok }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->harga }}
                    </td>
                    <td class="px-6 py-4 justify-center text-center flex">
                        <a href="" class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#42b7ff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a> | 
                        <a href="" class="ml-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e00f00" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a>                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br>
    <div class="flex items-center p-3 md:p-2 mb-3 border-b border-b rounded-t dark:border-gray-600">
    <div>
        <h5 class="text-md text-gray-900 dark:text-white">
        Pakaian Bawah
        </h5>
    </div>
    <div>
    <a href="{{ route('create-pb') }}">
        <!-- daftarin barang -->
        <!-- Modal toggle -->
        <button class="bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
        <span class="">Tambah Produk +</span>
        </button>
    </a>
    </div>
    </div>
    <!-- KATEGORI PAKAIAN BAWAH -->
    <div id="pakaianbawah" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 active">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span></th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtProduk_pb as $produk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        xxxxxx
                    </th>
                    <td class="px-6 py-4">
                        {{ $produk->nama_produk }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->stok }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->harga }}
                    </td>
                    <td class="px-6 py-4 justify-center text-center flex">
                        <a href="" class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#42b7ff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a> | 
                        <a href="" class="ml-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e00f00" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a>                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br>
    <div class="flex items-center p-3 md:p-2 mb-3 border-b border-b rounded-t dark:border-gray-600">
    <div>
        <h5 class="text-md text-gray-900 dark:text-white">
        Sepatu/Sandal
        </h5>
    </div>
    <div>
    <a href="{{ route('create-ss') }}">
        <!-- daftarin barang -->
        <!-- Modal toggle -->
        <button class="bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
        <span class="">Tambah Produk +</span>
        </button>
    </a>
    </div>
    </div>
    <!-- KATEGORI SEPATU/SANDAL -->
    <div id="sepatu/sandal" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 active">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span></th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtProduk_ss as $produk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        xxxxxx
                    </th>
                    <td class="px-6 py-4">
                        {{ $produk->nama_produk }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->stok }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $produk->harga }}
                    </td>
                    <td class="px-6 py-4 justify-center text-center flex">
                        <a href="" class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#42b7ff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a> | 
                        <a href="" class="ml-4"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e00f00" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a>                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br>

        <!-- KATEGORI PAKAIAN BAWAH
        <div id="pakaianbawah" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            xxxxxx
                        </th>
                        <td class="px-6 py-4">
                            Pakaian Bawah
                        </td>
                        <td class="px-6 py-4">
                            Adidas
                        </td>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        xxxxxx
                        </th>
                        <td class="px-6 py-4">
                        Pakaian Bawah
                        </td>
                        <td class="px-6 py-4">
                        -
                        </td>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->

        <!-- KATEGORI SEPATU SANDAL
        <div id="sepatusandal" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            xxxxxx
                        </th>
                        <td class="px-6 py-4">
                            Sepatu Sandal
                        </td>
                        <td class="px-6 py-4">
                            Adidas
                        </td>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->
    </div>
</div>
<!-- KATEGORI KONTEN -->
@endsection