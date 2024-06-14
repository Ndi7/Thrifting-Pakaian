<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Pakaian Atas</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Produk Pakaian Atas</h1>
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <!-- <th>Deskripsi</th> -->
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtPA as $item)
                <tr>
                    <td><img src="{{ public_path('images/PA/' . $item->gambar) }}" width="100"></td>
                    <td>{{ $item->nama_produk_pa }}</td>
                    <!-- <td>{{ $item->deskripsi_pa }}</td> -->
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga_pa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
