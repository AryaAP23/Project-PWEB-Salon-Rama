@extends('layouts.template')
@section('title', 'create staff - Salon Rama')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-center">Tambah Staff</h2>
    
    <form action="{{ route('storestaff') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-gray-700">Nama:</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
        </div>
        
        <div>
            <label for="contact" class="block text-gray-700">Contact Person:</label>
            <input type="text" name="contact" id="contact" class="w-full px-4 py-2 border rounded-lg" required>
        </div>
        
        <div class="text-center">
            <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Tambah Staff
            </button>
        </div>
    </form>
</div>
@endsection