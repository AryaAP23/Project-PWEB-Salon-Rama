@extends('layouts.template')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-5xl p-10">
        <h1 class="text-5xl font-extrabold text-center mb-12 text-gray-900">Hubungi Kami</h1>
        <div class="bg-white p-12 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold mb-6 text-gray-900">Informasi Kontak</h2>
            <p class="text-gray-600 text-lg mb-8">Kami dengan senang hati siap membantu Anda. Jika Anda memiliki pertanyaan, saran, atau ingin mengetahui lebih lanjut mengenai layanan kami, silakan hubungi kami melalui informasi berikut:</p>
            <div class="space-y-6 text-lg">
                <!-- Alamat -->
                <div class="flex items-start">
                    <svg class="w-8 h-8 text-[#FFA589] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13 21.314 8.343 16.657a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <div>
                        <strong>Alamat:</strong> <br>
                        Jl. HOS Cokroaminoto, Kelurahan Jember Kidul, Kabupaten Jember, Jawa Timur 68131
                    </div>
                </div>
                <!-- Email -->
                <div class="flex items-start">
                    <svg class="w-8 h-8 text-[#FFA589] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6m-18 8l9 6 9-6"></path>
                    </svg>
                    <div>
                        <strong>Email:</strong> <br>
                        <a href="mailto:salonrama@gmail.com" class="text-[#FFA589] hover:underline">salonrama@gmail.com</a>
                    </div>
                </div>
                <!-- Telepon -->
                <div class="flex items-start">
                    <svg class="w-8 h-8 text-[#FFA589] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l5 5-2.5 7.5L15 14l-5-5M15 10l5 5-2.5 7.5L15 14l-5-5"></path>
                    </svg>
                    <div>
                        <strong>Telepon:</strong> <br>
                        <a href="tel:+62895335010315" class="text-[#FFA589] hover:underline">0895-3350-10315</a>
                    </div>
                </div>
                <!-- Jam Operasional -->
                <div class="flex items-start">
                    <svg class="w-8 h-8 text-[#FFA589] mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h6"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6a6 6 0 100 12 6 6 0 100-12z"></path>
                    </svg>
                    <div>
                        <strong>Jam Operasional:</strong> <br>
                        Senin - Sabtu: 09.00 - 18.00 <br>
                        Minggu: Libur
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
