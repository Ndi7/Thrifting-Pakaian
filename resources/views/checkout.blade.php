<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
@extends('layout.navbar')

@section ('title', 'checkout')
@section('content')

<div class="container flex mx-auto px-5 my-10 justify-center">
    <div class="w-2/3">
    <h2 class="font-bold text-xl">Checkout</h2><br>
    <body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form name="form" action="{{ route('checkout.store') }}" method="POST">
    <div class="flex flex-wrap mb-10">
    {{ csrf_field() }}
    <div>
        <img src="{{ asset('images/PA/'. $dtPA->gambar) }}" alt="" id="gambar" name="gambar" class="w-32  h-32">
    </div>
    <div class="flex items-center text-center w-64 p-4 mr-5" id="nama_produk" name="nama_produk">
        <input class="text-center bg-white" value="{{ $dtPA->nama_produk_pa }}" disabled></input>
    </div>
    <div class="flex items-center justify-end text-end w-40 pr-4" id="harga_produk" name="harga_produk">
        <input class="text-end bg-white" value="Rp. {{ $dtPA->harga_pa }}" disabled></input>
    </div>

        <!-- Input hidden untuk mengirim data produk -->
        <input type="hidden" name="pa_product_id" value="{{ $dtPA->id }}">
        <input type="hidden" name="nama_produk" value="{{ $dtPA->nama_produk_pa }}">
        <input type="hidden" name="harga_produk" value="{{ $dtPA->harga_pa }}">

    </div>


        <div class="input-control text-sm mb-10">
            <input class="w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="email" id="email" name="email" placeholder="Alamat Email" required><br>
            <input type="checkbox" id="subscribe" name="subscribe" value="yes">
            <label for="subscribe" class="">Saya ingin menerima informasi terbaru mengenai produk dan promosi.</label>

            <h2 class="font-bold mt-10">Alamat Pengiriman</h2>
            <p class="text-sm">Masukkan alamat penerima pesanan.</p>
            <div class="input-control">
                <input class=" w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="nama" name="nama" placeholder="Nama" required>
            </div><br>
            <div class="input-control">
                <textarea class="w-2/3 p-2 border-t border-b border-black rounded-lg" id="alamat" name="alamat" rows="3" placeholder="Alamat" required></textarea>
            </div><br>
            <div class="input-control">
                <input class="w-2/3 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="label" name="label" placeholder="Apartement, kamar, dll. (opsional)">
            </div><br>
            <div class="mb-10 w-2/3">
                <div class="input-control flex flex-wrap gap-3">
                    <select class="w-2/5 h-10 p-2 border-t border-b border-black rounded-lg" name="provinsi" id="provinsi" required>
                        <option value="">Provinsi</option>
                        <option value="bali">Bali</option>
                        <option value="bangka-belitung">Bangka Belitung</option>
                        <option value="banten">Banten</option>
                        <option value="bengkulu">Bengkulu</option>
                        <option value="yogyakarta">DI Yogyakarta</option>
                        <option value="dki-jakarta">DKI Jakarta</option>
                        <option value="gorontalo">Gorontalo</option>
                        <option value="jambi">Jambi</option>
                        <option value="jabar">Jawa Barat</option>
                        <option value="jateng">Jawa Tengah</option>
                        <option value="jatim">Jawa Timur</option>
                        <option value="kalbar">Kalimantan Barat</option>
                        <option value="kalsel">Kalimantan Selatan</option>
                        <option value="kalteng">Kalimantan Tengah</option>
                        <option value="kaltim">Kalimantan Timur</option>
                        <option value="kalut">Kalimantan Utara</option>
                        <option value="kepri">Kepulauan Riau</option>
                        <option value="lampung">Lampung</option>
                        <option value="maluku">Maluku</option>
                        <option value="maluku-utara">Maluku Utara</option>
                        <option value="NAD">Nanggroe Aceh Darussalam</option>
                        <option value="NTB">Nusa Tenggara Barat</option>
                        <option value="NTT">Nusa Tenggara Timur</option>
                        <option value="papua">Papua</option>
                        <option value="pabar">Papua Barat</option>
                        <option value="papua-tengah">Papua Tengah</option>
                        <option value="papegu">Papua Pegunungan</option>
                        <option value="pasel">Papua Selatan</option>
                        <option value="pabada">Papua Barat Daya</option>
                        <option value="riau">Riau</option>
                        <option value="sulbar">Sulawesi Barat</option>
                        <option value="sulsel">Sulawesi Selatan</option>
                        <option value="sulteng">Sulawesi Tengah</option>
                        <option value="sultengg">Sulawesi Tenggara</option>
                        <option value="sulut">Sulawesi Utara</option>
                        <option value="sumbar">Sumatera Barat</option>
                        <option value="sumsel">Sumatera Selatan</option>
                        <option value="sumut">Sumatera Utara</option>
                    </select>
                    <input class="w-fit h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="kota" name="kota" placeholder="Kota" required>
                </div><br>
                <div class="input-control">
                    <input class="w-2/5 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="kode_pos" name="kode_pos" placeholder="Kode Pos" required>
                </div><br>
                <div class="input-control">
                    <input class="w-2/5 h-10 p-2 border-t border-b border-black rounded-lg" type="text" id="telepon" name="telepon" placeholder="Nomor Telephone" required>
                </div>
            </div>
            <h2 class="font-bold mt-10">Opsi Pengiriman</h2>
            <select class="w-2/3 border-t border-b border-black rounded-lg" id="opsi_pengiriman" name="opsi_pengiriman" required>
                <option value="">Pilih Jasa Pengiriman</option>
                <option value="reguler">Pengiriman Reguler (Estimasi tiba: 3-5 hari kerja)</option>
                <!-- <option value="ekspres">Pengiriman Ekspres (Estimasi tiba: 1-2 hari kerja)</option>
                <option value="kargo">Pengiriman Kargo (Estimasi tiba: 5-7 hari kerja)</option> -->
                <!-- <option value="ekspres">Pengiriman Ekspres (Estimasi tiba: 1-2 hari kerja)</option>
                <option value="kargo">Pengiriman Kargo (Estimasi tiba: 5-7 hari kerja)</option> -->
            </select>
            <h2 class="font-bold mt-5">Opsi Pembayaran</h2>
            <select class="w-2/3 border-t border-b border-black rounded-lg" id="opsi_pembayaran" name="opsi_pembayaran" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="transfer">Transfer Bank</option>
                <option value="COD">Cash on Delivery</option>
            </select>

            <h2 class="mt-5">Tambahkan catatan ke pesanan:</h2>
            <textarea class="w-2/3 p-2 border-t border-b border-black rounded-lg" id="catatan_pesanan" name="catatan_pesanan" rows="1" placeholder="Catatan tentang pesanan anda"></textarea>
            <h2 class="text-xs mt-2 text-red-500 font-semibold">*Dengan melanjutkan pembelian, artinya Anda menyetujui Syarat dan Ketentuan dan Kebijakan Privasi kami.</h2>
        </div><br>
        <div class="mt-7 text-xl items-end justify-end flex">
            <div class="h-24 flex justify-end items-center w-full">
            <a href="{{ url('checkoutberhasil',$dtPA->id) }}">
            <button type="" class="tombol-lanjutkan p-2 w-40 rounded-md bg-lawngreen text-center">CHECKOUT</button>
            </a>
            </div>
            </form>
    </body>

        </div>
    </div>
</div>


@endsection
