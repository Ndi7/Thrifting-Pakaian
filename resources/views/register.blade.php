<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
@extends('layout.register')

@section ('title', 'register')
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
      <div class="relative flex flex-col px-10 py-10 m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Welcome </span>
          <span class="font-light text-gray-400 mb-5">
            plese input your information 
        </span>
    
          
          </div>
          <form action="{{ route('register.registerPost')}}" method="POST">

            @csrf 
          <div class="py-1">
            <label for="name" class="form-label mb-2 text-md">username</label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control @error('name') is invalid @enderror w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
            @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
          </div>

            <div class="py-1">
                <label for="email" class="form-label mb-2 text-md">Email</label>
                <input
                  type="email"
                  class="form-control @error('email') is invalid @enderror w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                  name="email"
                  id="email"
                />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
          </div>

          <div class="py-1 mb-5">
            <label for="password" class="form-label mb-2 text-md">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control @error('password') is invalid @enderror w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

          </div>
          
          
          <button
            name="register" type="submit" class="btn w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-lawngreen hover:text-black">
            Daftar
          </button>

          <div class="text-center text-gray-400">
            Sudah punya akun?
            <span > <a class="font-bold text-black" href="{{ route('login')}}">Log in</a>  </span>
          </div>
          
        </div>
        </form>
        
        </div>
      </div>
    </div>
  </body>
</html>
@endsection