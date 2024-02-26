<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <!-- navbar start -->
    <div class="p-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold">CRUD Create, Read, Update</h1>
        </div>
    </div>
    <!-- navbar end -->

    
    <!-- Sidebar -->
    @extends('layout.sidebar')



    <!-- content start -->

    @yield('content')  <!-- Ke bagian Home.blade,php -->

    <!-- content end -->

</body>

</html>