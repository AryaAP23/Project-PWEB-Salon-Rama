<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed top-0 left-0 h-screen w-64 bg-kuarter text-black flex flex-col py-6 px-4">
        <h2 class="text-2xl font-bold mb-8">Dashboard</h2>
        
        <a href="{{ route('homepage_owner') }}" class="w-full text-left py-2 px-4 mb-4 bg-primary rounded hover:bg-secondary">
            Homepage
        </a>
        <a href="{{ route('order') }}" class="w-full text-left py-2 px-4 mb-4 bg-primary rounded hover:bg-secondary">
            Order
        </a>
        <a href="{{ route('reservation_box') }}" class="w-full text-left py-2 px-4 mb-4 bg-primary rounded hover:bg-secondary">
            Reservation Box
        </a>
        <a href="{{ route('service_owner') }}" class="w-full text-left py-2 px-4 mb-4 bg-primary rounded hover:bg-secondary">
            Service
        </a>
        <a href="{{ route('staff') }}" class="w-full text-left py-2 px-4 mb-4 bg-primary rounded hover:bg-secondary">
            Staff
        </a>
        <a href="{{ route('profil_owner') }}" class="w-full text-left py-2 px-4 mb-10 bg-primary rounded hover:bg-secondary">
            Profile
        </a>
        <a href="" class="w-full text-left py-2 px-4 mb-10 text-white bg-red-700 rounded hover:bg-red-600">
            Log Out
        </a>
    </div>

    <!-- Content Area -->
    <div class="ml-64 p-6 h-screen bg-primary">
        @yield('content')
    </div>
</body>
</html>