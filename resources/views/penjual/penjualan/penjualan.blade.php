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
   <h1 class="text-xl font-bold mb-5">Kategori</h1><br>
   @include('sweetalert::alert')
        <div>
            <a href="">
            <button  class="mb-2 bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            <span class="">Tambah Kategori +</span>
            </button>
            </a>

        <div class="ml-2 overflow-x-auto shadow-md sm:rounded-lg mb-5">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum nisi! Eius optio possimus nulla numquam unde minima vel ex!
                    </p>
                </div>
            </div>
        </div>
   </div>
<!-- KATEGORI KONTEN -->
@endsection