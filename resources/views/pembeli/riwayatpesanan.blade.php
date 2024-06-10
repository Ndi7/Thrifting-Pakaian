<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script src="{{ asset('js/indikatorpesanan.js') }}"></script>
@extends('layout.navbar')

@section ('title', 'Riwayat pesanan')
@section('content')
<div class="container mx-auto px-5 my-36 justify-center">
    <div class="py-2 border-b border-gray-500 ">
        <h1 class="font-semibold">Selesai</h1>
    </div>

    {{ csrf_field() }}
@foreach ($dtcheckout as $checkout)
    <div class="mt-4 flex items-center justify-center">
        <div class="w-5/6 flex items-center border-b border-gray-300">
            <div class="my-2">
                @if ($checkout->pakaianAtas)
                    <img src="{{ asset('images/PA/'. $checkout->pakaianAtas->gambar) }}" alt="" class="w-20">
                @elseif ($checkout->pakaianBawah)
                    <img src="{{ asset('images/PB/'. $checkout->pakaianBawah->gambar) }}" alt="" class="w-20">
                @endif
            </div>
            <div class="flex-1 ml-5">
                <p class="text-md">{{ $checkout->nama_produk }}</p>
            </div>
            <div>
                <a href="{{ route('invoice', $checkout->id) }}" class="border-b border-blue-400 text-blue-400">Invoice</a>
            </div>
        </div>
    </div>
@endforeach


</div>
@endsection

