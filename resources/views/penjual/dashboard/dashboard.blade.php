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
      <h1 class="text-2xl font-semibold mb-4">Dashboard Overview</h1>

      <!-- Pemberitahuan (Announcement) -->
      <div class="mb-8">
         <h2 class="text-lg font-semibold mb-2">Pemberitahuan Terbaru</h2>
         <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
               <p class="font-bold">Perhatian!</p>
               <p>Pemeliharaan server akan dilakukan setiap pada Tanggal 25 pukul 22:00 - 23:59 WIB.</p>
         </div>
      </div>

      <!-- Diagram lainnya bisa ditambahkan sesuai kebutuhan -->

   </div>
@endsection
</div>
    