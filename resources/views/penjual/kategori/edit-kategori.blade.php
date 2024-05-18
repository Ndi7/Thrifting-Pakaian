<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Kategori')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="dashboard-content" class="bg-white m-4 content kategori-content h-full p-4 mt-14">
   <h1 class="text-xl font-bold mb-5">Edit Kategori</h1>
   <div>
        <form class="p-4 md:p-5" method="post" action="{{ route('update-kategori',$ktgr->id) }}">
        {{ csrf_field() }}
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-3 sm:col-span-1">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                    <input type="text" name="kategori" id="kategori" value="{{ $ktgr->nama_kategori }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lawngreen focus:border-lawngreen block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik kategori" required="">
                </div>
            </div>
                <button type="" class="inline-flex items-center bg-lawngreen hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-lawngreen font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Ubah Kategori
                </button>
        </form>
   </div>
        </div>
            </div>
<!-- KATEGORI KONTEN -->
@endsection