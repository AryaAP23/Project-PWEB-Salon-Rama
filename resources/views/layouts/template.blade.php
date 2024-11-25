<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#FFA589] to-orange-200 min-h-screen">

    <!-- Header -->
    <header class="bg-[#2D2D2D] text-white shadow-lg fixed w-full">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Navigation -->
            <nav class="flex space-x-6">
                <a href="/homepage" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Home</a>
                <a href="/service" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Services</a>
                <a href="/reservasi" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Reservasi</a>
                <a href="/contact" class="hover:text-[#FFA589] px-3 py-2 rounded transition">Contact</a>
            </nav>

            <!-- Logo -->
            <h1 class="text-2xl font-bold text-[#FFA589]">Logo Salon Rama</h1>

            <!-- Sign Up & Sign In -->
            <div class="flex space-x-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                    Sign Up
                </a>
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                    Sign In
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    
    <footer class="bg-[#2D2D2D] text-white fixed bottom-0 left-0 w-full py-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Salon Rama. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
