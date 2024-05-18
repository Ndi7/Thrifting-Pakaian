<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
@extends('layout.login')

@section ('title', 'Login.')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-0">
      <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Selamat datang</span>
          <span class="font-light text-gray-400 mb-8">
            Silahkan Login!
        </span>
        

        <form action="{{ route('login.loginPost')}}" method="POST">

          @csrf 

          @if (session()->has('loginError'))
          <span class="text-red-500">{{ session('loginError') }}</span>
          @endif

          <div class="py-1">
          <select class="w-full h-10 text-black rounded-md border border-gray-300 focus:ring-lawngreen focus:border-lawngreen" name="deliveryOption">
            <option value="Via Transfer">Pilih Jenis User</option>
            <option value="Via Transfer">Pembeli</option>
            <option value="Cash On Delivery (COD)">Penjual</option>
          </select>
              @error('email')
                  <span class="text-red-500">{{ $message }}</span>
              @enderror
        </div>

          <div class="py-1">
              <label for="email" class="form-label mb-2 text-md text-bold">Email</label>
              <input
                type="email"
                class="form-control @error('email') is invalid @enderror w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 focus:ring-lawngreen focus:border-lawngreen" placeholder="enter email"
                name="email"
                id="email"
              />
              @error('email')
                  <span class="text-red-500">{{ $message }}</span>
              @enderror
        </div>

        <div class="py-1">
          <label for="password" class="form-label mb-2 text-md">Password</label>
          <input type="password" name="password" id="password" class="form-control @error('password') is invalid @enderror w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 focus:ring-lawngreen focus:border-lawngreen" placeholder="enter password"/>
              @error('password')
                  <span class="text-red-500">{{ $message }}</span>
              @enderror

        </div>
          
          <div class="flex justify-between w-full mb-5">
            <!-- <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2" />
              <span class="text-md">Remember for 30 days</span>
            </div> -->
            <span><a class="font-thin text-xs" href="#" >Lupa password</a></span>
          </div>

          <button name="login" type="submit" class="bg-gray-100 btn w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-lawngreen">
          Sign in</button>
          

          <div class="text-center text-gray-400">Tidak punya akun?<span>
            <a class="font-bold text-black" href="{{ route('register')}}">Daftar Disini!</a></span>
          </div>

        </div>
        </form>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="{{ asset('images/bg2.jpg')}}"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
          <div
            class="absolute hidden bottom-5 right-5 p-6 bg-white bg-opacity-20 backdrop-blur-sm rounded drop-shadow-lg md:block"
          >
           
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection