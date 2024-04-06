<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
@extends('layout.navbar')

@section ('title', 'checkout')
@section('content')

<div class="container mx-auto px-5 my-10 justify-center">
    <h2 class="font-bold text-xl">Checkout</h2><br>
    <div>
        <h2 class="font-bold">Informasi Kontak</h2>
        <p>Kami akan menggunakan email ini untuk mengirimkan rincian dan pembaruan <br> mengenai pesanan Anda.</p>
    </div>
    <div>        
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Alamat Email" required><br>
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        <label for="subscribe">Saya ingin menerima informasi terbaru mengenai produk dan promosi.</label><br><br>
    </div>
    <div>
        <h2 class="font-bold">Alamat Pengiriman</h2>
        <p>Masukkan alamat penerima pesanan.</p>
    </div>
    <div>
        <label for="namadepan"></label>
        <input type="text" id="namadepan" name="namadepan" placeholder="Nama Depan" required>
        <label for="namabelakang">&nbsp;</label>
        <input type="text" id="namabelakang" name="namabelakang" placeholder="Nama Belakang" required>
    </div><br>
    <div>
        <label for="alamat"></label>
        <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
    </div><br>
    <div>
        <label for="opsional"></label>
        <input type="text" id="opsional" name="opsional" placeholder="Apartement, kamar, dll. (opsional)">
    </div><br>
    <div>
    <label for="provinsi"></label>
        <select name="provinsi" id="provinsi" required>
        <option value="provinsi">Provinsi</option>
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
        <option value="kalbar">kalimantan Barat</option>
        <option value="kalsel">kalimantan Selatan</option>
        <option value="kalteng">kalimantan Tengah</option>
        <option value="kaltim">kalimantan Timur</option>
        <option value="kalut">kalimantan Utara</option>
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
        <label for="kota">&nbsp;</label>
        <input type="text" id="kota" name="kota" placeholder="Kota" required>
    </div><br>
    <div>
    <label for="kodepos"></label>
        <input type="text" id="kodepos" name="kodepos" placeholder="Kode Pos" required>
        <label for="notelp">&nbsp;</label>
        <input type="text" id="notelp" name="notelp" placeholder="Nomor Telephone" required>
    </div><br>
    <div>
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        <label for="subscribe">Gunakan alamat yang sama untuk penagihan.</label>
    </div><br>
    <div>
        <h2 class="font-bold">Opsi Pengiriman</h2>
    </div>
    <div>
    <label for="opsiPengiriman"></label>
    <select id="opsiPengiriman" name="opsiPengiriman" required>
        <option value="">Pilih Jasa Pengiriman</option>
        <option value="reguler">Pengiriman Reguler (Estimasi tiba: 3-5 hari kerja)</option>
        <option value="ekspres">Pengiriman Ekspres (Estimasi tiba: 1-2 hari kerja)</option>
        <option value="kargo">Pengiriman Kargo (Estimasi tiba: 5-7 hari kerja)</option>
    </select>
    </div><br>
    <div>
        <h2 class="font-bold">Opsi Pembayaran</h2>
    </div>
    <div>
    <label for="opsiPembayaran"></label>
    <select id="opsiPembayaran" name="opsiPembayaran" required>
        <option value="">Pilih Metode Pembayaran</option>
        <option value="transfer">Transfer Bank</option>
        <option value="COD">Cash on Delivery</option>
    </select>
    </div><br>
    <div>
        <h2>Tambahkan catatan ke pesanan:</h2>
        <textarea id="catatanPesanan" name="catatanPesanan" rows="4" cols="50" placeholder="Catatan tentang pesanan anda"></textarea>
    </div><br>
    <div>
        <h2>Dengan melanjutkan pembelian, artinya Anda menyetujui Syarat dan <br> Ketentuan dan Kebijakan Privasi kami.</h2>
    </div><br>
        <div class="flex h-10 mt-7 gap-10 text-xl">
    <a href="keranjang" class="tombol-kembali">← Kembali ke Keranjang</a>
    <a href="#" class="tombol-lanjutkan">Lakukan Pemesanan</a>
</div>

</div>

@endsection
