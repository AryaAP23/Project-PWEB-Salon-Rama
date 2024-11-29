@extends('layouts.template_owner')
@section('title', 'Service - Salon Rama')
@section('content')
<div class="container">
    <h1 class="font-bold text-5xl m-5">Data Layanan</h1>
    <a href="{{ route('createservice') }}" class="bg-green-400 hover:bg-green-600 px-5 py-0 rounded-xl">Tambah Layanan</a>
    <table class="table-auto w-full mb-6 border-collapse border border-black shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-secondary text-black">
                <th class="p-3 border border-black">No</th>
                <th class="p-3 border border-black">Nama</th>
                <th class="p-3 border border-black">Price</th>
                <th class="p-3 border border-black">Description</th>
                <th class="p-3 border border-black">Is Avaible</th>
                <th class="p-3 border border-black">Gambar</th>

                <th class="p-3 border border-black">Actions</th>
            </tr>
        </thead>    
        <tbody>
            @foreach($service as $index => $s)
            <tr class="bg-white hover:bg-orange-100 transition duration-200">
                <td class="p-3 text-center border border-black">{{ $index + 1 }}</td>
                <td class="p-3 text-center border border-black">{{ $s->name }}</td>
                <td class="p-3 text-center border border-black">{{ $s->price }}</td>
                <td class="p-3 text-center border border-black">{{ $s->description }}</td>
                <td class="p-3 text-center border border-black">{{ $s->is_available == 1 ? 'Available' : 'Not Available' }}</td>
                <td>
                    @if ($s->image)
                    <img src="{{ asset('storage/' . $s->image) }}" alt="Gambar {{ $s->name }}" class="w-16 h-16 object-cover">
                    @else
                        <span>Tidak ada gambar</span>
                    @endif
                </td>
                <td class="p-3 text-center border border-black">
                    {{-- <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700">Detail</button> --}}
                    <a href="{{ route('editservice', $s->service_id) }}" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-yellow-700">Edit</a>
                    <a href="{{ route('deleteservice', $s->service_id) }}" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-yellow-700">Delete</a>
                    
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
            
    </body>
</div>
@endsection