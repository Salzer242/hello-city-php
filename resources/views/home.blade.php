<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body class="antialiased">
       <h1>Hello from Senegal !</h1>

       <p>It's currenty {{ date('H:i A') }}</p>

       <footer>
            <p>&copy; copyright {{ date('Y') }} &middot; <a href="#">About Us</a></p>
       </footer>
    </body>
</html>
