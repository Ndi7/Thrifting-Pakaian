<div id="laporan-content" class="bg-white m-4 content laporan-content h-full p-4 mt-14 hidden">
    <link rel="stylesheet" href="{{ asset('styles/output.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
    <script src="{{ asset('js/sidebardashboard.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    @extends('layout.dashboardnavbar')

    @section('title', 'Laporan')
    @section('content')
    <div class="bg-slate-100 p-2 pt-10 sm:ml-64">
       <div id="" class="bg-white m-4 kategori-content h-full p-4 mt-14 overflow-auto">
       <h1 class="text-xl font-bold mb-2"> Daftar Pesanan</h1><br>
       @include('sweetalert::alert')
            <div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                      <!-- FORM UNTUK FILTER DAN PENCARIAN -->
                    <form action="" method="get">
                        <div class="input-group mb-3 col-md-6 float-right">
                            <select name="status" class="form-control mr-3">
                                <option value="">Pilih Status</option>
                                <option value="0">Baru</option>
                                <option value="1">Confirm</option>
                                <option value="2">Proses</option>
                                <option value="3">Dikirim</option>
                                <option value="4">Selesai</option>
                            </select>
                            <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                    <!-- FORM UNTUK FILTER DAN PENCARIAN -->

                      <!-- TABLE UNTUK MENAMPILKAN DATA ORDER -->
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>InvoiceID</th>
                                    <th>Pelanggan</th>
                                    <th>Subtotal</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><strong></strong></td>
                                    <td>
                                        <strong></strong><br>
                                        <label><strong>Telp:</strong> </label><br>
                                        <label><strong>Alamat:</strong> </label>
                                    </td>
                                    <td>Rp </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <form action="" method="post">

                                            <a href="" class="btn btn-warning btn-sm">Lihat</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
       </div>
    <!-- KATEGORI KONTEN -->
    @endsection

   </div>
