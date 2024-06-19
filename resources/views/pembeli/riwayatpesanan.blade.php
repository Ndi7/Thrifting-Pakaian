@extends('layout.navbar')

@section('title', 'Riwayat pesanan')
@section('content')
<div class="container mx-auto px-5 my-36 justify-center">
    <div class="py-2 border-b border-gray-500">
        <h1 class="font-semibold">Selesai</h1>
    </div>

    {{ csrf_field() }}

    @php
        // Kelompokkan produk PA dan PB
        $groupedProducts = ['PA' => [], 'PB' => [], 'other' => []];

        foreach ($dtcheckout as $checkout) {
            if ($checkout->pakaianAtas && $checkout->pakaianAtas->gambar) {
                $groupedProducts['PA'][] = $checkout;
            } elseif ($checkout->pakaianBawah && $checkout->pakaianBawah->gambar) {
                $groupedProducts['PB'][] = $checkout;
            } else {
                $groupedProducts['other'][] = $checkout;
            }
        }

        // Tampilkan produk sesuai urutan yang diminta
        $order = ['PA', 'PB', 'other'];
    @endphp

@foreach ($order as $category)
    @if (isset($groupedProducts[$category]) && count($groupedProducts[$category]) > 0)
        <div class="mt-8">
            <h2 class="text-lg font-semibold">
                @if ($category === 'PA')
                    Daftar Pakaian Atas
                @elseif ($category === 'PB')
                    Daftar Pakaian Bawah
                @else
                    Produk lainnya
                @endif
            </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
        @foreach ($groupedProducts[$category] as $checkout)
            <div class="flex items-center justify-center">
                <div class="w-full flex items-center border-b border-gray-300">
                    <div class="my-2">
                        @if ($checkout->pakaianAtas)
                            <img src="{{ asset('images/PA/'. $checkout->pakaianAtas->gambar) }}" alt="" class="w-20 h-20">
                        @elseif ($checkout->pakaianBawah)
                            <img src="{{ asset('images/PB/'. $checkout->pakaianBawah->gambar) }}" alt="" class="w-20 h-20">
                        @endif
                    </div>
                    <div class="flex-1 ml-5">
                        <p class="text-md">{{ $checkout->nama_produk }}</p>
                    </div>
                    <div class="flex items-center">
                        <a href="{{ route('invoice', $checkout->id) }}" class="border-b border-blue-400 text-blue-400 text-sm flex items-center">
                            <button class="flex items-center">
                                Invoice
                                <svg class="w-4 h-4 ml-2 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor">
                                    <!-- Font Awesome SVG Icon -->
                                    <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        </div>
    @endif
@endforeach
</div>
@endsection
</div>

