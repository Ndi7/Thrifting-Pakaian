@extends('layout.navbar')

@section('title', 'Riwayat pesanan')
@section('content')
<div class="container mx-auto px-5 my-36 justify-center">
    <div class="py-2 border-b border-gray-500">
        <h1 class="font-semibold">Selesai</h1>
    </div>

    {{ csrf_field() }}

    @php
        $jaketBlueXury = $dtcheckout->filter(function($checkout) {
            return $checkout->nama_produk == 'Jaket Blue Xury';
        })->first();
        
        $celanaJeansWanita = $dtcheckout->filter(function($checkout) {
            return $checkout->nama_produk == 'Celana Jeans Wanita' && $checkout->pakaianBawah && $checkout->pakaianBawah->gambar;
        })->first();
        
        $otherProducts = $dtcheckout->filter(function($checkout) {
            return !in_array($checkout->nama_produk, ['Jaket Blue Xury', 'Celana Jeans Wanita']);
        });
    @endphp

    @if($jaketBlueXury)
        <div class="mt-4 flex items-center justify-center">
            <div class="w-5/6 flex items-center border-b border-gray-300">
                <div class="my-2">
                    <img src="{{ asset('images/PA/'. $jaketBlueXury->pakaianAtas->gambar) }}" alt="" class="w-20">
                </div>
                <div class="flex-1 ml-5">
                    <p class="text-md">{{ $jaketBlueXury->nama_produk }}</p>
                </div>
                <div>
                    <a href="{{ route('invoice', $jaketBlueXury->id) }}" class="border-b border-blue-400 text-blue-400">Invoice</a>
                </div>
            </div>
        </div>
    @endif

    @foreach($otherProducts as $checkout)
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

    @if($celanaJeansWanita)
        <div class="mt-4 flex items-center justify-center">
            <div class="w-5/6 flex items-center border-b border-gray-300">
                <div class="my-2">
                    <img src="{{ asset('images/PB/'. $celanaJeansWanita->pakaianBawah->gambar) }}" alt="" class="w-20">
                </div>
                <div class="flex-1 ml-5">
                    <p class="text-md">{{ $celanaJeansWanita->nama_produk }}</p>
                </div>
                <div>
                    <a href="{{ route('invoice', $celanaJeansWanita->id) }}" class="border-b border-blue-400 text-blue-400">Invoice</a>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
