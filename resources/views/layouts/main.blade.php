<!DOCTYPE html>
<html lang="en" class="scroll-smooth" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Belajar Laravel Tailwind</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@500&family=Inter:wght@200;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    @include('partials.navbar')
    
    @yield('container')

    @include('partials.footer')
@vite('resources/js/app.js')  

{{-- Script Navbar --}}
<script src="js/script.js"></script>
</body>
</html>