@extends('layouts.template')
@section('title', 'Service - Salon Rama')
@section('content')

<title>Service List</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    .card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
</style>
<body class="bg-gradient-to-br from-orange-200 via-orange-400 to-white text-gray-800">
    <div class="container mx-auto p-4">
        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-gradient-to-r from-orange-400 to-orange-500 text-white p-8 rounded-lg shadow-lg text-center mb-8">
            <h1 class="text-4xl font-bold">Welcome to Salon Rama</h1>
            <p class="mt-2 text-lg">Explore our premium services tailored for your beauty needs.</p>
        </div>

        <!-- Search Bar -->
        <form action="{{ route('service') }}" method="GET" class="mb-4">
            <input 
                type="text" 
                name="search" 
                value="{{ $search }}" 
                placeholder="Search Service name or description..."
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
            >
        </form>

        <!-- View for Services -->
        @if ($search)
            <p class="mb-4 text-gray-700">Showing results for: <span class="font-bold">"{{ $search }}"</span></p>
        @else
            <p class="mb-4 text-gray-700"></p>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($services as $service)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 relative hover:scale-105 hover:rotate-1 hover:shadow-xl transition-all duration-300 ease-in-out">
                    <img src="{{ asset('images/sample-service.jpg') }}" alt="{{ $service->name }}" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out hover:scale-105">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold truncate">{{ $service->name }}</h2>
                        <p class="text-sm text-gray-600 truncate">{{ $service->description }}</p>
                        <p class="text-lg font-bold text-orange-500 mt-2">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                    
                        <button 
                            class="mt-4 w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded flex items-center justify-center transition-all duration-300 ease-in-out hover:scale-105 hover:animate-bounce"
                            onclick="window.location.href='{{ route('reservasi') }}'"
                        >
                            <span class="material-icons mr-2">event_available</span>
                            Book Now
                        </button>
                    </div>
                </div>            
            @empty
                <p class="col-span-4 text-center text-gray-500">No services found matching your search.</p>
            @endforelse
        </div>

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-orange-500 to-orange-600 text-white text-center py-4 mt-8 rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
            <p>&copy; 2024 Salon Rama. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

@endsection
