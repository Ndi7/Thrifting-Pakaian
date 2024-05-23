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

    <div class="flex m-8 bg-yellow-100">
      <div class="w-1/4 bg-blue-600">
        <img src="{{asset('/images/contoh.jpg')}}" class="" alt="">
      </div>
      <div class="w-3/4 bg-red-100 text-center items-center justify-center ">
        <div class="text-6xl ">Store Slebew</div>
        <div class="text-xl">BY0012024</div>
      </div>
    </div>
    
    <!-- Bawah Gambar -->
    <div class="bg-green-200 m-8">
      <div class="w-1/4 mr-8 bg-slate-300">
      <form action="">
        <table class="">
          <tr class="font-semibold">
              <td>Nama Toko</td>
              <td class="pl-2 pr-5">:</td>
              <td>Store Slebew</td>
          </tr>
          <tr>
              <td>ID</td>
              <td class="pl-2 pr-5">:</td>
              <td>BY0012024</td>
          </tr>
          <tr>
              <td>Tanggal Lahir</td>
              <td class="pl-2 pr-5">:</td>
              <td> 7 Juli 2003</td>
          </tr>
          <tr>
              <td>Alamat</td>
              <td class="pl-2 pr-5">:</td>
              <td>Simp. DAM Mukakuning</td>
          </tr>
          <tr>
              <td>No Telepon</td>
              <td class="pl-2 pr-5">:</td>
              <td>0895340033922</td>
          </tr>
          <tr>
              <td>Email</td>
              <td class="pl-2 pr-5">:</td>
              <td>ndigiawa.7@gmail.com</td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
    

  

@endsection