<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
@extends('layout.navbar')

@section ('title', 'landingpage')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrifting Pakaian - Selamat Datang!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: ;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
         img {
            margin-bottom: 20px;
            max-width: 100%;
            height: auto; 
            margin-left: 18%;
        }
        .header {
            text-align: center;
            padding: 100px 0;
            color: #fff;
            font: italic bold 16px Arial, sans-serif;

        }
        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f0720a;
            color: #fcfeff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e65100;
        }
        .popular-brands {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .brand {
            flex: 1;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .brand h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .brand p {
            color: #666;
            font-size: 16px;
        }
        .brand img {
            width: 100%;
            height: auto;
            max-width: 100px;
            max-height: 100px; 
            object-fit: cover; 

        }

        .top-header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navigation {
            margin-right: 20px;
            ccolor: #fff; 
        }
        .navigation ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            
        }
        .navigation ul li {
            margin-right: 20px;
        }
        .navigation ul li:last-child {
            margin-right: 0;
            
        }
        .navigation ul li a {
            color: #fff; 
        }

        .navigation ul li a:hover {
            color: #f89a41; 
        }

        .search-button {
            padding: 5px 50px;
            background-color: #f0720a;
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 30px;
        }
        .search-button:hover {
            background-color: #faf6f3;
        }

        .centered-description {
            text-align: center;
            margin-top: 20px; 
            margin-bottom: 20px; 
        }

        .product {
            margin-top: 40px;
            display: flex; 
            justify-content: space-between;
            align-items: center;
        }
        .product-item {
            width: 23%; /* 4 products in a row */
            padding: 10px;
            border: 1px solid #f5eded;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
            color: #b90404;
        }
        .product img {
            max-width: 80%;
            border-radius: 5px;
        }
        .product-info {
            margin-top: 10px;
        }
        .product-info h3 {
            margin: 5px 0;
            color: #333;
            font-size: 18px;
        }
        .product-info p {
            margin: 5px 0;
            color: #020202;
            font-size: 16px;
        }
        .product-info .price {
            color: #000000;
            font-size: 16px;
            font-weight: bold;
        }
        .promo {
            margin-top: 40px;
            display: flex; flex-wrap: -3
            justify-content: space-between;
            align-items: center;
        }
        .promo-item {
            width: 30%; /* 3 promos in a row */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
        }
        .promo img {
            max-width: 90%;
            border-radius: 5px;
        }
        .promo-info {
            margin-top: 10px;
        }
        .promo-info h3 {
            margin: 5px 0;
            color: #333;
            font-size: 18px;
        }
        .promo-info p {
            margin: 5px 0;
            color: #666;
            font-size: 16px;
        }
        .promo-info .price {
            color: #030303;
            font-size: 18px;
            font-weight: bold;
        }
        .promo-info .discount-price {
            color: #ff0000;
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/bkg2.jpg') }}" alt="Uang Besar" width="800" height="400">
            <br>
            <a href="#shop" class="cta-button">Mulai Belanja</a>
        </div>
        <h2>Popular Brands</h2>
        <div class="popular-brands">
            <div class="brand">
                <img src="{{ asset('images/brand1.jpg') }}">
            </div>
            <div class="brand">
                <img src="{{ asset('images/brand2.jpg') }}">
            </div>
            <div class="brand">
                <img src="{{ asset('images/brand3.jpg') }}">
            </div>
            <div class="brand">
                <img src="{{ asset('images/brand4.jpg') }}">
            </div>
        </div>
        <div class="product">
            <div class="product-item">
                <img src="{{ asset('images/p1.png') }}">
                <div class="product-info">
                    <h3>Dickies</h3>
                    <p>Size:L</p>
                    <p class="price">Harga: Rp 200.000</p>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/p2.png') }}">
                <div class="product-info">
                    <h3>The North Face</h3>
                    <p>Size:M</p>
                    <p class="price">Harga: Rp 700.000</p>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/p3.png') }}">
                <div class="product-info">
                    <h3>Carlo Rino</h3>
                    <p>One Size</p>
                    <p class="price">Rp 200.000</p>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/p4.png') }}">
                <div class="product-info">
                    <h3>Vintage</h3>
                    <p>Size:XL</p>
                    <p class="price">Rp 250.000</p>
                </div>
            </div>
        </div>
        <!-- New Collection -->
        <div class="promo">
            <div class="promo-item">
                <img src="{{ asset('images/pm1.png') }}">
                <div class="promo-info">
                    <h3>Crocodile</h3>
                    <p>Size:M</p>
                    <p class="price"> Harga :   Rp  180.000  <span class="discount-price">Rp 200.000</span> </p>
                </div>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/pm2.png') }}">
                <div class="promo-info">
                    <h3>Uniqlo</h3>
                    <p>Size:M</p>
                    <p class="price"> Harga :   Rp 250.000 <span class="discount-price">Harga:300</span> </p>
                </div>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/pm3.png') }}">
                <div class="promo-info">
                    <h3>Chrome Hearts</h3>
                    <p>size:M</p>
                    <p class="price"> Harga :   Rp 650.000 <span class="discount-price">Rp 700.000</span> </p>
                </div>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/pm4.png') }}">
                <div class="promo-info">
                    <h3>Umbro</h3>
                    <p>Size:L</p>
                    <p class="price"> Harga :   Rp 1.420.000 <span class="discount-price">Rp 1.500.000 </span> </p>
                </div>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/pm5.png') }}">
                <div class="promo-info">
                    <h3>MLB</h3>
                    <p>Size:XL</p>
                    <p class="price"> Harga :   Rp 380.000 <span class="discount-price">Rp 400.000</span> </p>
                </div>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/pm6.png') }}">
                <div class="promo-info">
                    <h3>NIKE</h3>
                    <p>Size:XL</p>
                    <p class="price"> Harga :   Rp 535.500 <span class="discount-price">Rp 550.000</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection