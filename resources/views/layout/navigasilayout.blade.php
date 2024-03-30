<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('component.navhead')
    </header>
    
            @yield('content')
    
    <footer>
        @include('component.navfoot')
    </footer>
</body>
</html>