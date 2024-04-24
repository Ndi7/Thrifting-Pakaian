<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script src="{{ asset('js/indikatorpesanan.js') }}"></script>
@extends('layout.navbar')

@section ('title', 'Katalog')
@section('content')
<div class="container mx-auto px-5 my-36 justify-center">
<ul class="text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
        <li class="w-full focus-within:z-10">
            <a href="#dikemas" class="tab-link inline-block w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-l-lg focus:ring-1 focus:ring-lawngreen active focus:outline-none dark:bg-gray-700 dark:text-white">Dikemas</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#dikirim" class="tab-link inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-1 focus:ring-lawngreen focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Dikirim</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#selesai" class="tab-link inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-1 focus:ring-lawngreen focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Selesai</a>
        </li>
        <li class="w-full focus-within:z-10">
            <a href="#dibatalkan" class="tab-link inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-r-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-1 focus:outline-none focus:ring-lawngreen dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Dibatalkan</a>
        </li>
    </ul>
    <div id="dikemas" class="content rounded-lg active">
        <div class="bg-green-100 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-100 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-100 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
    </div>
    <div id="dikirim" class="content rounded-lg hidden">
        <div class="bg-green-200 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-200 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-200 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
    </div>
    <div id="selesai" class="content rounded-lg hidden">
        <div class="bg-green-300 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-300 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-300 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
    </div>
    <div id="dibatalkan" class="content rounded-lg hidden">
        <div class="bg-green-400 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-400 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
        <div class="bg-green-400 p-5 mt-5">
        <p>Isi konten untuk status dikemas.</p>
        </div>
</div>
<br>             
</div>
@endsection

