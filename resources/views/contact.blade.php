@extends('layouts.template')

@section('content')
<div class="container mx-auto py-12 bg-gradient-to-r from-[#FFA589] via-white to-[#FFA589]">
    <h1 class="text-4xl font-bold text-center mb-8 text-black">Contact Us</h1>

    <!-- Feedback Section -->
    @if(session('success'))
    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-md shadow-md">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-md shadow-md">
        <ul class="list-disc pl-6">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <div class="p-6 bg-white shadow rounded-lg">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-black">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-black">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-[#FFA589] focus:border-[#FFA589]" required></textarea>
                </div>
                <button type="submit" class="px-6 py-2 bg-[#FFA589] text-white rounded-md hover:bg-[#FF8C66]">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-5xl font-bold mb-4 text-black">Get in Touch</h2>
            <p class="text-black mb-4 text-2xl">Feel free to reach out to us for any inquiries or support. We're here to help!</p>
            <ul>
                <li class="mb-2 text-1xl">
                    <strong>Address:</strong> <span class="text-black">Jl. HOS Cokroaminoto, Kelurahan Jember Kidu, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131</span>
                </li>
                <li class="mb-2 text-1xl">
                    <strong>Email:</strong> <span class="text-black">salonrama@gmail.com</span>
                </li>
                <li class="mb-2 text-1xl">
                    <strong>Phone:</strong> <span class="text-black">0895-3350-10315</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
