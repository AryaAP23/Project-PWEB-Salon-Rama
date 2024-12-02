@extends('layouts.template')
@section('title', 'create staff - Salon Rama')
@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto max-w-md py-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <form action="{{ route('register') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Register</button>
        </form>
    </div>
</body>
@endsection