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
   <div class="rounded-lg bg-white pb-8 shadow-xl">
        <div class="h-[250px] w-full">
          <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="h-full w-full rounded-tl-lg rounded-tr-lg" />
        </div>
        <div class="-mt-20 flex flex-col items-center">
          {{-- Check if $profil->photo exists --}}
          @if($profilpnjl->photo)
            <img src="{{ asset('images/profile/Seller/'. $profilpnjl->photo) }}" class="w-40 h-40 rounded-full border-4 border-white" />
          @else
            <img src="https://cc64k.aktivin.id/assets/avatar-placeholder-63430c6b.png" class="w-40 rounded-full border-4 border-white" />
          @endif
          <div class="mt-2 flex items-center space-x-2">
            <p class="text-2xl">{{ $profilpnjl->name }}</p>
          </div>
          <p class="text-gray-700">{{ $profilpnjl->email }}</p>
        </div>
        <div class="mt-2 flex flex-1 flex-col items-center justify-end px-8 lg:items-end">

          <div class="mt-2 flex items-center space-x-4">
            <a href="{{ route('edit.profilpenjual.form', $profilpnjl->id) }}">
              <button class="flex items-center space-x-2 rounded bg-lime-600 px-4 py-2 text-sm text-gray-100 transition duration-100 hover:bg-lime-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
                <span>edit</span>
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="my-4 flex flex-col space-y-4 2xl:flex-row 2xl:space-x-4 2xl:space-y-0">
        <div class="flex w-full flex-col 2xl:w-1/3">
          <div class="flex-1 rounded-lg bg-white p-8 shadow-xl">
            <h4 class="text-xl font-bold text-gray-900">Personal Info</h4>
            <ul class="mt-2 text-gray-700">
              <li class="flex border-y py-2">
                <span class="w-24 font-bold">Nama</span>
                <span class=" mx-2 font-bold">:</span>
                <span class="text-gray-700">{{ $profilpnjl->name }}</span>
              </li>

              <li class="flex border-b py-2">
                <span class="w-24 font-bold">Bergabung</span>
                <span class=" mx-2 font-bold">:</span>
                <span class="text-gray-700">{{ $profilpnjl->created_at }}</span>
              </li>

              <li class="flex border-b py-2">
                <span class="w-24 font-bold">Lokasi</span>
                <span class=" mx-2 font-bold">:</span>
                <span class="text-gray-700">{{ $profilpnjl->address }}</span>
              </li>
              <li class="flex border-b py-2">
                <span class="w-24 font-bold">No Telepon</span>
                <span class=" mx-2 font-bold">:</span>
                <span class="text-gray-700">{{ $profilpnjl->phone }}</span>
              </li>
              <li class="flex border-b py-2">
                <span class="w-24 font-bold">Status</span>
                <span class=" mx-2 font-bold">:</span>
                <span class="text-gray-700">{{ $profilpnjl->level }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

   </div>
@endsection
</div>
