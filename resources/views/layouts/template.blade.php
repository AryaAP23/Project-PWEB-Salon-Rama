<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    <style class="">
        * {
            font-family: sans-serif
        }
    </style>
</head>
<body>
    <header class="bg-pink-100 text-black h-24 flex items-center justify-between p-4">
        <nav class="flex space-x-4">
            <a href="{{ route('homepage') }}" class="text-black hover:bg-orange-300 hover:text-white transition-colors duration-300 p-1 rounded">Home</a>
            <a href="{{ route('service') }}" class="text-black hover:bg-orange-300 hover:text-white transition-colors duration-300 p-1 rounded">Services</a>
            <a href="{{ route('reservasi') }}" class="text-black hover:bg-orange-300 hover:text-white transition-colors duration-300 p-1 rounded">Reservasi</a>
            <a href="{{ route('contact') }}" class="text-black hover:bg-orange-300 hover:text-white transition-colors duration-300 p-1 rounded">Contact</a>
        </nav>
        <h1 class="text-2xl font-bold">Logo Salon Rama</h1>
        <div class="flex space-x-4"> <!-- Menambahkan div untuk tombol Sign Up dan Sign In -->
            <a href="{{ route('register') }}" class="text-white bg-blue-500 hover:bg-blue-700 transition-colors duration-300 p-2 rounded">Daftar</a>
            <a href="{{ route('loginform') }}" class="text-white bg-green-500 hover:bg-green-700 transition-all duration-300 p-2 rounded">Masuk</a>
        </div>
    </header>
    <main class=" bg-orange-500">
        @yield('content')
    </main>
</body>
</html>