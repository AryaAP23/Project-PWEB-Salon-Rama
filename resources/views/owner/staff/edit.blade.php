@extends('layouts.template_owner')
@section('title', 'edit staff - Salon Rama')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-center">Edit Staff</h2>
    
    <form action="{{ route('updatestaff', $user->user_id) }}" method="POST" class="space-y-4">
        @csrf
        @method("PUT")

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$user->name}}" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" id="phone" name="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$user->phone}}" required>
            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$user->email}}" required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>{{ $user->alamat }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Edit staff
            </button>
        </div>







        {{-- <div>
            <label for="name" class="block text-gray-700">Nama:</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" value="{{$staff->name}}" required>
        </div>
        
        <div>
            <label for="contact" class="block text-gray-700">Contact Person:</label>
            <input type="text" name="contact" id="contact" class="w-full px-4 py-2 border rounded-lg" value="{{$staff->contact}}" required>
        </div> --}}
        
    </form>
</div>
@endsection