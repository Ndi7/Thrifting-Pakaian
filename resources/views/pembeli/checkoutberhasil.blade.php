<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pemesanan</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
<div class="container mx-auto bg-white shadow-lg rounded-lg p-8 flex flex-col items-center">
    <div class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-green-500" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm-1.5 9.5l4.5-4.5 1.5 1.5-6 6-3-3 1.5-1.5 1.5 1.5z" clip-rule="evenodd"></path>
    </svg>

        <h2 class="text-xl font-semibold mt-4">Checkout Berhasil!!</h2>
        <p class="text-gray-600 mt-2"></p>
        <div class="w-full max-w-lg p-4">
            @if (session('success'))
            <div>{{ session('success') }}</div>
            @endif
            <div class="grid grid-cols-3 gap-4">
                <div class="text-gray-700 text-left">Nama</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">{{ $dtcheckout->nama_produk }}</div>

                <div class="text-gray-700 text-left">Harga</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">Rp. {{ $dtcheckout->harga_produk }}</div>

                <div class="text-gray-700 text-left">Jumlah</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">1</div>

                <div class="text-gray-700 text-left">Jasa Pengiriman</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">{{ $dtcheckout->opsi_pengiriman }}</div>

                <div class="text-gray-700 text-left">Metode Pembayaran</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">{{ $dtcheckout->opsi_pembayaran }}</div>

                <div class="text-gray-700 text-left">Subtotal Pemesanan</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">Rp.130000</div>

                <div class="text-gray-700 text-left">Subtotal Pengiriman</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-right">Rp.20000</div>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-4">
                <div class="text-gray-700 text-left">Total Pembayaran</div>
                <div class="text-gray-700 text-left">:</div>
                <div class="font-semibold text-lg text-indigo-600 text-right">Rp.140000</div>
            </div>
        </div>

        <div class="mt-8">
            <!-- Tombol untuk membuka modal -->
            <button id="btnLihatDetail" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400">Lakukan Pembayaran</button>
        </div><br>
        <!-- <div>
            <a href="../landingpage" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400">Kembali ke Home</a>
        </div> -->
    </div>


</body>

</html>
