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
    <div class="container mx-auto bg-white shadow-lg rounded-lg p-8">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-green-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.293 9.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <h2 class="text-xl font-semibold mt-4">Checkout Berhasil!!</h2>
            <p class="text-gray-600 mt-2">Pesanan Anda sedang diproses</p>
            <div class="mt-8">
                <!-- Tombol untuk membuka modal -->
                <button id="btnLihatDetail" class="text-indigo-500 font-semibold hover:underline focus:outline-none">Lihat Detail Pemesanan</button>
            </div><br>
            <div>
            <a href="Home" class="bg-gray-300 text-gray-700  py-2 px-4 rounded-md hover:bg-gray-400">Kembali ke Home</a>
            </div>
        </div>
    </div>

    <!-- Modal Detail Pemesanan -->
<div id="modalDetail" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-3 max-w-md mx-auto rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold mb-4">Detail Pemesanan:</h3>
        <div class="text-align-justify">
            <div>
                <span class="text-gray-700">Nama Produk 1 :</span>
                <span class="font-semibold">Kaos Oversize Harley Davidson</span>
            </div>
            <div>
                <span class="text-gray-700">Nama Produk 2 :</span>
                <span class="font-semibold">T-Shirt Polo</span>
            </div>
            <div>
                <span class="text-gray-700">Harga 1 : </span>
                <span class="font-semibold">Rp75.000</span>
            </div>
            <div>
                <span class="text-gray-700">Harga 2 : </span>
                <span class="font-semibold">Rp55.000</span>
            </div>
            <div>
                <span class="text-gray-700">Jumlah :</span>
                <span class="font-semibold">2</span>
            </div>
            <div>
                <span class="text-gray-700">Jasa Pengiriman :</span>
                <span class="font-semibold">Pengiriman Ekspres</span>
            </div>
            <div>
                <span class="text-gray-700">Metode Pembayaran :</span>
                <span class="font-semibold">Cash of Delivery (COD)</span>
            </div>
            <div>
                <span class="text-gray-700">Subtotal Pemesanan :</span>
                <span class="font-semibold">Rp130.000</span>
            </div>
            <div>
                <span class="text-gray-700">Subtotal Pengiriman :</span>
                <span class="font-semibold">Rp20.000</span>
            </div>
            <div>
                <span class="text-gray-700">Kupon Diskon :</span>
                <span class="font-semibold">-Rp10.000</span>
            </div>
            <!-- Tambahkan informasi produk lainnya di sini -->
        </div>
        <div class="mt-4">
            <span class="text-gray-700">Total Pembayaran :</span>
            <span class="font-semibold text-lg text-indigo-600">Rp140.000</span>
        </div>
        <!-- Tombol untuk menutup modal -->
        <div class="mt-6 text-center">
            <button id="btnTutupModal" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none">Tutup</button>
        </div>
    </div>
</div>


    <!-- Include script untuk interaksi dengan modal -->
    <script>
        // Ambil elemen tombol dan modal
        const btnLihatDetail = document.getElementById('btnLihatDetail');
        const modalDetail = document.getElementById('modalDetail');
        const btnTutupModal = document.getElementById('btnTutupModal');

        // Tambahkan event listener untuk tombol "Lihat Detail Pemesanan"
        btnLihatDetail.addEventListener('click', function () {
            modalDetail.classList.remove('hidden');
        });

        // Tambahkan event listener untuk tombol "Tutup"
        btnTutupModal.addEventListener('click', function () {
            modalDetail.classList.add('hidden');
        });
    </script>
</body>

</html>
