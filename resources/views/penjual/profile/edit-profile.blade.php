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
   <body>
    <form name="form" action="{{ route('edit.profilpenjual.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="space-y-12">
            <div class="border-b border-gray-300 pb-6">
                <h1 class="text-lg font-semibold text-gray-900">Ubah Data Diri</h1>
                <p class="mt-1 text-sm text-gray-600">Informasi ini akan ditampilkan secara publik jadi berhati-hatilah dengan apa yang Anda bagikan.</p>

                <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="hidden" name="id" value="{{ $profil->id }}">
                        <input type="text" name="name" id="name" autocomplete="name" class="mt-2 p-2 w-48 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $profil->name }}">
                    </div>

                    <div class="col-span-full">
                        <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                        <label for="photo" class="mt-2 inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-lawngreen focus:outline-none focus:border-lawngreen focus:ring focus:ring-indigo-200 disabled:opacity-25 transition cursor-pointer">Ubah</label>
                        <input type="file" name="photo" id="photo" class="hidden">
                        <p id="photoError" class="text-sm text-red-500 mt-1"></p>
                        <img id="photoPreview" src="{{ asset('images/profile/Seller/' . $profil->photo) }}" alt="Current Photo" class="w-40 h-40 mt-2 rounded-full border-2 border-gray-300">
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-300 pb-6">
                <h2 class="text-lg font-semibold text-gray-900">Informasi Pribadi</h2>
                <p class="mt-1 text-sm text-gray-600">Gunakan Email pribadi Anda.</p>

                <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" class="mt-2 p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $profil->email }}">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">No Telepon</label>
                        <input type="text" name="phone" id="phone" autocomplete="tel" class="mt-2 p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $profil->phone }}">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" name="address" id="address" autocomplete="street-address" class="mt-2 p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $profil->address }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('penjual.profilpenjual') }}" class="text-sm font-semibold text-gray-700">Batal</a>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-lawngreen border border-transparent rounded-md font-bold text-xs uppercase tracking-widest hover:bg-lime-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Simpan</button>
        </div>
    </form>

    <script>
        document.getElementById('photo').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('photoPreview');
                preview.src = URL.createObjectURL(file);
                preview.onload = () => URL.revokeObjectURL(preview.src);
            }
        });
    </script>
</body>

   </div>
@endsection
</div>
    