<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Dashboard')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="dashboard-content" class="bg-white m-4 content dashboard-content h-full p-4 mt-14">
    <h1 class="text-xl font-bold mb-5">Dashboard</h1>
    <h2 class="font-semibold">- Ringkasan penjualan</h2>
   </div>
   
   

@endsection