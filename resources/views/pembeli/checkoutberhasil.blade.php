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

    <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-green-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.293 9.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <div class="text-center">
        <h2 class="text-xl font-semibold mt-4">Checkout Berhasil!!</h2>
        </div>
        <p class="text-gray-600 mt-2"></p>
        <div class="bg-red-100 w-full max-w-md p-4">
            @if (session('success'))
            <div>{{ session('success') }}</div>
            @endif
            <div class="grid grid-cols-3 gap-4">
                <div class="text-gray-700">Nama</div>
                <div>:</div>
                <div class="font-semibold">{{ $dtcheckout->nama_produk }}</div>
                <div class="text-gray-700">Harga</div>
                <div>:</div>
                <div class="font-semibold">{{ $dtcheckout->harga_produk }}</div>
                <div class="text-gray-700">Jumlah</div>
                <div>:</div>
                <div class="font-semibold">1</div>
                <div class="text-gray-700">Jasa Pengiriman</div>
                <div>:</div>
                <div class="font-semibold">{{ $dtcheckout->opsi_pengiriman }}</div>
                <div class="text-gray-700">Metode Pembayaran</div>
                <div>:</div>
                <div class="font-semibold">{{ $dtcheckout->opsi_pembayaran }}</div>
                <div class="text-gray-700">Subtotal Pemesanan</div>
                <div>:</div>
                <div class="font-semibold">Rp130.000</div>
                <div class="text-gray-700">Subtotal Pengiriman</div>
                <div>:</div>
                <div class="font-semibold">Rp20.000</div>
            </div>
            <div class="mt-4 grid grid-cols-3 gap-4">
                <div class="text-gray-700">Total Pembayaran</div>
                <div>:</div>
                <div class="font-semibold text-lg text-indigo-600">Rp140.000</div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <!-- Tombol untuk membuka modal -->
            <button id="btnLihatDetail" class="text-indigo-500 font-semibold hover:underline focus:outline-none">Lakukan Pembayaran</button>
        </div><br>
        <div class="text-center">
            <a href="../landingpage" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400">Kembali ke Home</a>
        </div>
    </div>

    <!-- Modal Detail Pemesanan -->
    <div id="modalDetail" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-3 max-w-md mx-auto rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Detail Pemesanan:</h3>
        
            <!-- Tombol untuk menutup modal -->
            <div class="mt-6 text-center">
                <button id="btnTutupModal" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btnLihatDetail').addEventListener('click', function() {
        document.getElementById('modalDetail').classList.remove('hidden');
    });

    document.getElementById('btnTutupModal').addEventListener('click', function() {
        document.getElementById('modalDetail').classList.add('hidden');
    });
</script>

</body>

</html>
