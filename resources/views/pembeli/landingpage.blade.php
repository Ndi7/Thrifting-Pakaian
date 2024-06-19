<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
@extends('layout.navbar')

@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrifting Pakaian - Selamat Datang!</title>
    <link href="{{ asset('styles/output.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/crsl.css') }}" rel="stylesheet">
</head>
<body class="">
    <div class="max-w-7xl mx-auto p-5 text-center">
        <div class="bg-center py-24 text-white italic font-bold" style="background-image: url('{{ asset('images/bgcontainer1.jpg') }}'); background-size: cover; height: 500px;">
        </div>
        <div>
            <a href="../katalog" class="inline-block mt-6 px-6 py-3 bg-orange-500 text-white rounded-lg text-lg transition duration-300 hover:bg-orange-700">Mulai Belanja</a>
        </div>
        <h2 class="text-2xl font-semibold mt-10">Brand Populer</h2>
        <div class="flex justify-between mt-10">
            <div class="flex-1 text-center p-5 bg-white rounded shadow">
                <img src="{{ asset('images/brand1.jpg') }}" class="w-full h-auto mx-auto max-w-xs">
            </div>
            <div class="flex-1 text-center p-5 bg-white rounded shadow mx-4">
                <img src="{{ asset('images/brand2.jpg') }}" class="w-full h-auto mx-auto max-w-xs">
            </div>
            <div class="flex-1 text-center p-5 bg-white rounded shadow mx-4">
                <img src="{{ asset('images/brand3.jpg') }}" class="w-full h-auto mx-auto max-w-xs">
            </div>
            <div class="flex-1 text-center p-5 bg-white rounded shadow">
                <img src="{{ asset('images/brand4.jpg') }}" class="w-full h-auto mx-auto max-w-xs">
            </div>
        </div>
        <div class="mt-10 flex flex-wrap justify-between">
            <div class="w-1/4 p-2 border rounded text-center">
                <img src="{{ asset('images/p1.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Dickies</h3>
                    <p class="text-gray-600">Size: L</p>
                    <p class="font-bold text-black">Harga: Rp 200.000</p>
                </div>
            </div>
            <div class="w-1/4 p-2 border rounded text-center">
                <img src="{{ asset('images/p2.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">The North Face</h3>
                    <p class="text-gray-600">Size: M</p>
                    <p class="font-bold text-black">Harga: Rp 700.000</p>
                </div>
            </div>
            <div class="w-1/4 p-2 border rounded text-center">
                <img src="{{ asset('images/p3.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Carlo Rino</h3>
                    <p class="text-gray-600">One Size</p>
                    <p class="font-bold text-black">Rp 200.000</p>
                </div>
            </div>
            <div class="w-1/4 p-2 border rounded text-center">
                <img src="{{ asset('images/p4.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Vintage</h3>
                    <p class="text-gray-600">Size: XL</p>
                    <p class="font-bold text-black">Rp 250.000</p>
                </div>
            </div>
        </div>
        <!-- New Collection -->
        <div class="mt-10 flex flex-wrap justify-between">
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm1.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Crocodile</h3>
                    <p class="text-gray-600">Size: M</p>
                    <p class="font-bold text-black">Harga: Rp 180.000 <span class="line-through text-red-500">Rp 200.000</span></p>
                </div>
            </div>
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm2.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Uniqlo</h3>
                    <p class="text-gray-600">Size: M</p>
                    <p class="font-bold text-black">Harga: Rp 250.000 <span class="line-through text-red-500">Rp 300.000</span></p>
                </div>
            </div>
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm3.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Chrome Hearts</h3>
                    <p class="text-gray-600">Size: M</p>
                    <p class="font-bold text-black">Harga: Rp 650.000 <span class="line-through text-red-500">Rp 700.000</span></p>
                </div>
            </div>
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm4.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">Umbro</h3>
                    <p class="text-gray-600">Size: L</p>
                    <p class="font-bold text-black">Harga: Rp 1.420.000 <span class="line-through text-red-500">Rp 1.500.000</span></p>
                </div>
            </div>
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm5.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">MLB</h3>
                    <p class="text-gray-600">Size: XL</p>
                    <p class="font-bold text-black">Harga: Rp 380.000 <span class="line-through text-red-500">Rp 400.000</span></p>
                </div>
            </div>
            <div class="w-1/3 p-2 border rounded text-center">
                <img src="{{ asset('images/pm6.png') }}" class="w-4/5 mx-auto rounded">
                <div class="mt-2">
                    <h3 class="text-lg font-semibold">NIKE</h3>
                    <p class="text-gray-600">Size: XL</p>
                    <p class="font-bold text-black">Harga: Rp 535.500 <span class="line-through text-red-500">Rp 550.000</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
