@extends('layouts.template')
@section('title', 'create staff - Salon Rama')
@section('content')
<div class="container mx-auto mt-10 max-w-md bg-white shadow-md rounded-lg p-8">
    <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input 
                id="name" 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                class="w-full p-2 border rounded @error('name') border-red-500 @enderror" 
                placeholder="Enter your name" 
                required
            >
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Phone</label>
            <input id="phone" type="text" name="phone" value="{{ old('phone') }}" class="w-full p-2 border rounded @error('phone') border-red-500 @enderror" placeholder="Enter your phone number" required>
            @error('phone')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border rounded @error('email') border-red-500 @enderror" placeholder="Enter your email" required>
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Alamat -->
        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat</label>
            <textarea id="alamat" name="alamat" class="w-full p-2 border rounded @error('alamat') border-red-500 @enderror" placeholder="Enter your address" required>{{ old('alamat') }}</textarea>
            @error('alamat')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" type="password" name="password" class="w-full p-2 border rounded @error('password') border-red-500 @enderror" placeholder="Enter your password" required>
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="w-full p-2 border rounded" placeholder="Re-enter your password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
            Register
        </button>
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Sudah punya akun?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Masuk di sini</a>
            </p>
        </div>
    </form>
</div>
@endsection