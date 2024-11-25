@extends('layouts.template_owner')
@section('title', 'Staff - Salon Rama')
@section('content')
        <div class="container">
            <h1 class="font-bold text-5xl m-5">Data Staff</h1>
            <a href="{{ route('createstaff') }}" class="bg-tertiary hover:bg-secondary px-5 py-0 rounded-md">Tambah data</a>
            <table class="table-auto w-full mb-6 border-collapse border border-black shadow-lg rounded-lg overflow-hidden">
                <thead>
                    <tr class=" bg-secondary text-black">
                        <th class="p-3 border border-black">No</th>
                        <th class="p-3 border border-black">Nama</th>
                        <th class="p-3 border border-black">Contact</th>
                        <th class="p-3 border border-black">Email</th>
                        <th class="p-3 border border-black">Alamat</th>

                        <th class="p-3 border border-black">Actions</th>
                    </tr>
                </thead>    
                <tbody>
                    @foreach($user as $index => $s)
                    <tr class="bg-white hover:bg-orange-100 transition duration-200">
                        <td class="p-3 text-center border border-black">{{ $index + 1 }}</td>
                        <td class="p-3 text-center border border-black">{{ $s->name }}</td>
                        <td class="p-3 text-center border border-black">{{ $s->phone }}</td>
                        <td class="p-3 text-center border border-black">{{ $s->email }}</td>
                        <td class="p-3 text-center border border-black">{{ $s->alamat }}</td>
                        <td class="p-3 text-center border border-black">
                            {{-- <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700">Detail</button> --}}
                            <a href="{{ route('editstaff', $s->user_id) }}" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-yellow-700">Edit</a>
                            <a href="{{ route('deletestaff', $s->user_id) }}" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-yellow-700">Delete</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                   
            </body>
        </div>
@endsection