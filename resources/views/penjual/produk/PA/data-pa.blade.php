<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Kategori')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="" class="bg-white m-4 h-full p-4 mt-14 overflow-auto">
   <h1 class="text-xl font-bold mb-5">Katalog produk</h1><br>
   @include('sweetalert::alert')
    <div class="flex items-center p-3 md:p-2 mb-3 border-b rounded-t dark:border-gray-600">
        <div>
            <h5 class="text-md text-gray-900 dark:text-white">
            Pakaian Atas
            </h5> 
        </div>
        <div>
        <a href="{{ route('create-pakaianatas') }}">
            <!-- daftarin barang -->
            <!-- Modal toggle -->
            <button class="bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            <span class="">Tambah Produk +</span>
            </button>
        </a>
        </div>
    </div>
    <!-- KATEGORI PAKAIAN ATAS -->
    <div id="pakaianatas" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
    <table class="w-fit text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <!-- <th scope="col" class="px-6 py-3">
                        ID produk
                    </th> -->
                    <th scope="col" class="px-6 py-3">
                        Gambar
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
            <tbody class="">
                @foreach ($dtPA as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                    <!-- <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->id}} -->
                    <td class="px-6 py-4 " width="20%">
                        <a href="{{ asset('images/PA/'. $item->gambar) }}"><img src="{{ asset('images/PA/'. $item->gambar) }}" class="" alt=""></a>
                    </td>
                    <td class="px-6 py-4 text-center">{{$item->nama_produk_pa}}</td>
                    <td class="px-6 py-4">{{$item->deskripsi_pa}}</td>
                    <td class="px-6 py-4 text-center">{{$item->stok}}</td>
                    <td class="px-6 py-4 text-center">{{$item->harga_pa}}</td>
                    <td class="px-6 py-24 justify-center items-center text-center flex space-x-4">
                        <a href="{{ url('edit-pakaianatas',$item->id) }}" class="mr-4 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#42b7ff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a> | 
                        <a href="{{ url('delete-pakaianatas',$item->id) }}" class="ml-4 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e00f00" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a>                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br>

    </div>
</div>

@endsection