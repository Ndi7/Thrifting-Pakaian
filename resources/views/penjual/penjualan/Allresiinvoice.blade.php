<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
          max-width: 600px;
            margin: auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .barcode-container {
            text-align: center; /* Menempatkan barcode di tengah */
            margin-top: 20px;  /* Jarak atas */
            margin-bottom: 20px;  /* Jarak atas */
        }
        .header {
            text-align: center;
        }
        .header img {
            width: 150px;
        }

        .info p {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }
        .info p span {
            display: inline-block;
            width: 48%;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table th, table td {
            border-bottom: 1px solid #ddd;
            padding: 2px;
            text-align: justify;
        }

        .contact{
            margin-bottom:50px;
        }

    </style>
</head>

<body>
    @foreach ($invoicesData as $data)
    <div class="container">
        <div class="header">
            <img src="{{ public_path('images/logo10%.png') }}" alt="Logo">
        </div>

        <div class="barcode-container">
            {!! $data['barcode'] !!}
        </div>
        
        <div class="info">
            <p>
                <span class="text-gray-400">Pelanggan:</span>
                <span>{{ $data['nama'] }}</span>
            </p>
            <p>
                <span class="text-gray-400">Status pembayaran:</span>
                <span>{{ $data['status'] }}</span>
            </p>
            <p>
                <span class="text-gray-400">Waktu pemesanan:</span>
                <span>{{ $data['created_at'] }}</span>
            </p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>QTY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nama_produk'] }}</td>
                    <td class="text-right">{{ $data['qty'] }}</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <table>
                <tbody>
                    <tr>
                        <th>Harga Barang:</th>
                        <td class="text-right">Rp.{{ number_format($data['harga_produk'], 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Ongkos Pengiriman:</th>
                        <td class="text-right">Rp.{{ number_format($data['ongkos'], 0, ',', '.') }}</td>
                    </tr>
                    <tr class="total">
                        <th>Total:</th>
                        <td class="text-right">Rp.{{ number_format($data['subtotal'], 0, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="contact">
            <p>
                <span>second2chance@gmail.com</span>
            </p>
            <p>
                <span>+62-877-1233-0000</span>
            </p>
            <hr>
        </div>
    </div>
    @endforeach
</body>

</html>
