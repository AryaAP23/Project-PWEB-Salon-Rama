@extends('layouts.template')
@section('title', 'Homepage - Salon Rama')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  .parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<body class="bg-white text-gray-800">

  <!-- Section Homepage -->
  <div class="relative w-full h-screen bg-cover bg-center parallax" style="background-image: url('img/homepage.png');">
    <!-- Overlay untuk gradasi -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-transparent"></div>

    <!-- Konten Hero -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
      <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 tracking-wider uppercase drop-shadow-lg">Look Good, Be Confident!</h1>
      <p class="text-lg lg:text-2xl max-w-2xl mb-6 opacity-90">
        Tempat terbaik untuk meraih penampilan sempurna dan percaya diri.
      </p>
      <a href="{{ route('reservasi') }}" 
      class="px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg shadow-lg text-white font-semibold tracking-wide 
             hover:bg-gradient-to-l hover:from-orange-600 hover:to-orange-500 
             hover:shadow-xl hover:text-orange-100 
             transition duration-300 ease-in-out transform hover:scale-110 active:scale-95 drop-shadow-lg">
        Buat Reservasi
      </a>
    </div>

    <!-- Smooth Scroll Button -->
    <div class="absolute bottom-10 w-full flex justify-center">
      <a href="#promotional" class="animate-bounce text-orange-500 hover:text-orange-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Wave Divider -->
  <div class="relative -mb-10">
    <svg class="absolute w-full" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,149.3C384,171,480,181,576,176C672,171,768,149,864,154.7C960,160,1056,192,1152,202.7C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
  </div>

  <!-- Section Promotional -->
  <section id="promotional" class="py-16 px-6 lg:px-20 bg-gradient-to-br from-orange-200 via-orange-400 to-white" data-aos="fade-up">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <!-- Left Block -->
      <div class="text-center lg:text-left">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Rama Salon cares about...</h3>
        <p class="text-gray-700 mb-6">
          How you feel on the inside as well as how you look on the outside and therefore, the team aims to provide a service that creates an incomparable experience with a lasting impact.
        </p>
        <a href="{{ route('service') }}" class="inline-block px-6 py-3 bg-orange-500 text-white font-medium rounded-full shadow-md hover:bg-orange-600 transition duration-300">
          CHECK OUR SERVICES
        </a>
      </div>
      <!-- Left Image -->
      <div class="relative">
        <img src="img/promosi.jpeg" alt="Body Care" class="rounded-lg shadow-md w-full h-auto">
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mt-10">
      <!-- Right Image -->
      <div class="relative order-last lg:order-first">
        <img src="img/promosi2.jpeg" alt="Nail Care" class="rounded-lg shadow-md w-full h-auto">
      </div>
      <!-- Right Block -->
      <div class="text-center lg:text-left">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Book an appointment today and...</h3>
        <p class="text-gray-700 mb-6">
          Let us transform your vision into an experience. You’ll leave feeling pretty on the outside and, more importantly, beautiful on the inside.
        </p>
        <a href="{{ route('service') }}" class="inline-block px-6 py-3 bg-orange-500 text-white font-medium rounded-full shadow-md hover:bg-orange-600 transition duration-300">
          CHECK OUR SERVICES
        </a>
      </div>
    </div>
  </section>

  <!-- Section Our Services -->
  <section class="py-16 px-6 lg:px-20 bg-gradient-to-r from-orange-100 via-orange-200 to-orange-300">
    <h2 class="text-center text-4xl font-bold text-gray-800 mb-10 tracking-wide">Our Services</h2>
    <div class="h-1 w-40 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 mx-auto mb-10 rounded"></div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Service Card -->
      <a href="{{ route('service') }}" class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
          <div class="w-16 h-16 mx-auto bg-gradient-to-r from-orange-400 to-orange-500 rounded-full flex items-center justify-center mb-4 transition-transform transform group-hover:scale-110">
            <img src="logo/hair_treatment.png" alt="Hair Styling" class="w-10 h-10">
          </div>
          <h3 class="text-xl font-semibold text-gray-700 group-hover:text-orange-500">Hair Treatment</h3>
          <p class="mt-2 text-gray-600">Nutrisi Rambut agar Rambut Tampak Berkilau & Bercahaya</p>
        </div>
        <div class="bg-orange-50 p-4 text-center text-sm text-orange-700">
          Klik untuk informasi lebih lanjut!
        </div>
      </a>
      <!-- Service Card -->
      <a href="{{ route('service') }}" class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
          <div class="w-16 h-16 mx-auto bg-gradient-to-r from-orange-400 to-orange-500 rounded-full flex items-center justify-center mb-4 transition-transform transform group-hover:scale-110">
            <img src="logo/facial.png" alt="Facial Treatment" class="w-10 h-10">
          </div>
          <h3 class="text-xl font-semibold text-gray-700 group-hover:text-orange-500">Facial Treatment</h3>
          <p class="mt-2 text-gray-600">Nikmati perawatan wajah terbaik untuk kulit yang bercahaya.</p>
        </div>
        <div class="bg-orange-50 p-4 text-center text-sm text-orange-700">
          Klik untuk informasi lebih lanjut!
        </div>
      </a>
      <!-- Service Card -->
      <a href="{{ route('service') }}" class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
          <div class="w-16 h-16 mx-auto bg-gradient-to-r from-orange-400 to-orange-500 rounded-full flex items-center justify-center mb-4 transition-transform transform group-hover:scale-110">
            <img src="logo/hair_cutting.png" alt="Makeup Services" class="w-10 h-10">
          </div>
          <h3 class="text-xl font-semibold text-gray-700 group-hover:text-orange-500">Hair Cutting</h3>
          <p class="mt-2 text-gray-600">Gaya rambut terbaru untuk Anda dengan sentuhan modern.</p>
        </div>
        <div class="bg-orange-50 p-4 text-center text-sm text-orange-700">
          Klik untuk informasi lebih lanjut!
        </div>
      </a>
    </div>
  </section>

  <!-- Footer Section --> 
  <footer class="bg-peach-100 py-10">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Salon Address -->
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-4">SALON ADDRESS</h4>
        <p class="text-gray-600">JL Hoscokroaminoto</p>
        <p class="text-gray-600">Jember</p>
        <p class="text-gray-600">Jawa Timur</p>
      </div>
      <!-- Contact -->
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-4">CONTACT</h4>
        <p class="text-gray-600">📞 081556786777</p>
        <p class="text-gray-600">📱 0895335010315</p>
        <p class="text-gray-600">📧 ramasalonjember@gmail.com</p>
      </div>
      <!-- Follow Us -->
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-4">FOLLOW US</h4>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-600 hover:text-gray-800 transition">
            <i class="fab fa-facebook-square text-2xl"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-gray-800 transition">
            <i class="fab fa-twitter-square text-2xl"></i>
          </a>
        </div>
      </div>
      <!-- Opening Hours -->
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-4">OPENING HOURS</h4>
        <p class="text-gray-600">Monday: 10:00 - 18:00</p>
        <p class="text-gray-600">Tuesday: Closed</p>
        <p class="text-gray-600">Wednesday - Saturday: 10:00 - 18:00</p>
        <p class="text-gray-600">Sunday: 10:00 - 17:00</p>
      </div>
    </div>
  </footer>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
@endsection