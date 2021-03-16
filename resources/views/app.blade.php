<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
        @yield('content')
        
       <footer>
            <p>
                &copy; copyright {{ date('Y') }} 
                &middot; <a href="/about-us">About Us</a>
            </p>
       </footer>
    </body>
</html>