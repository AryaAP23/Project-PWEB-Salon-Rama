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
    <header class="bg-[#2D2D2D] text-white shadow-lg fixed w-full">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">

          <!-- Navigation -->
          <nav class="flex space-x-6">
            <a href="/homepage" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Home</a>
            <a href="/service" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Services</a>
            <a href="/reservasi" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Reservasi</a>
            <a href="/contact" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Contact</a>
         </nav>

         <h1 class="text-2xl font-bold">Logo Salon Rama</h1>
         <div class="flex space-x-4"> <!-- Menambahkan div untuk tombol Sign Up dan Sign In -->
            {{-- <a href="#" class="text-white bg-blue-500 hover:bg-blue-700 transition-colors duration-300 p-2 rounded">Sign Up</a> --}}
            {{-- <a href="#" class="text-white bg-green-500 hover:bg-green-700 transition-all duration-300 p-2 rounded">Sign In</a> --}}
            <a href="{{ route('register') }}" class="text-white bg-blue-500 hover:bg-blue-700 transition-colors duration-300 p-2 rounded">Daftar</a>
            <a href="{{ route('loginform') }}" class="text-white bg-green-500 hover:bg-green-700 transition-all duration-300 p-2 rounded">Masuk</a>
         </div>
        </div>
    </header>

    <main>
    <main class=" bg-gradient-to-r from-[#FFA589] via-white to-[#FFA589] ">
        @yield('content')
    </main>

    <!-- Footer -->
    
    <footer class="bg-[#2D2D2D] text-white fixed bottom-0 left-0 w-full py-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Salon Rama. All rights reserved by Kelompok B7.</p>
        </div>
    </footer>
</body>