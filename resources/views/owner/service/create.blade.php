@extends('layouts.template_owner')
@section('title', 'create service - Salon Rama')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-center">Tambah Layanan</h2>
    
    <form action="{{ route('storeservice') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="text" id="price" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="3" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="is_available" class="block text-lg font-medium">Tersedia:</label>
            <select name="is_available" id="is_available" class="border rounded-lg w-full p-2" required>
                <option value="1">Tersedia</option>
                <option value="0">Tidak Tersedia</option>
            </select>
        </div>


        <div class="text-center">
            <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Tambah Layanan
            </button>
        </div>
        
    </form>
</div>
@endsection