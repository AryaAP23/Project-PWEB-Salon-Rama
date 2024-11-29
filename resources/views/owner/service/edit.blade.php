@extends('layouts.template_owner')
@section('title', 'edit staff - Salon Rama')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-center">Edit Layanan</h2>
    
    <form action="{{ route('updateservice', $service->service_id) }}" method="POST" class="space-y-4">
        @csrf
        @method("PUT")

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$service->name}}" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="text" id="price" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$service->price}}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="3" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>{{$service->description}}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{$service->image}} required>
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