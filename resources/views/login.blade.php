<link rel="stylesheet" href="{{ asset('styles/style.css') }}">
@extends('layout.login')

@section ('title', 'Login.')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page</title>
<head>

<body>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <a href="#">Forget Your Password?</a>
            <button>Sign In</button>
            </form>
        </div>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="{{ asset('images/image.jpg')}}"
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

   <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
@endsection