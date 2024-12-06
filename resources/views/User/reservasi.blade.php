@extends('layouts.template')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl p-10">
            <h1 class="text-4xl font-bold text-center mb-12 text-gray-900">Reservasi Salon Rama</h1>

            <div id="reservation-steps">
                <!-- Langkah 1: Pilih Layanan -->
                <div class="step step-1">
                    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Pilih Layanan</h2>
                    <p class="mb-4 text-gray-600">Pilih layanan yang ingin Anda pesan dari daftar di bawah ini:</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                        @foreach ($services as $key => $service)
                            <div
                                class="flex flex-col items-start p-6 border rounded-lg hover:bg-gray-50 transition duration-300">
                                <div class="flex items-center">
                                    <input type="checkbox" id="{{ $service['service_id'] }}" name="services[]"
                                        value="{{ $service['service_id'] }}" data-price="{{ $service['price'] }}"
                                        class="h-5 w-5">
                                    <label for="service{{ $key }}" class="text-lg text-gray-800 ml-3">
                                        <span class="text-2xl">{{ $service['name'] }}</span> Rp
                                        {{ number_format($service['price'], 0, ',', '.') }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="goToStep2"
                        class="w-full py-3 px-6 bg-gradient-to-r from-[#FFA589] to-[#FF8C66] text-white font-bold rounded-lg hover:opacity-90 shadow-lg transition duration-300">
                        Lanjut
                    </button>
                </div>

                <!-- Langkah 2: Pilih Tanggal -->
                <div class="step step-2 hidden">
                    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Pilih Tanggal dan Waktu</h2>
                    <div class="mb-6">
                        <label for="date" class="block mb-2 text-gray-600 font-medium">Pilih Tanggal:</label>
                        <input type="date" id="date" name="date"
                            class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="time" class="block mb-2 text-gray-600 font-medium">Pilih Waktu:</label>
                        <select id="time" name="time"
                            class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                            required>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                        </select>
                    </div>
                    <button type="button" id="goToStep3"
                        class="w-full py-3 px-6 bg-gradient-to-r from-[#FFA589] to-[#FF8C66] text-white font-bold rounded-lg hover:opacity-90 shadow-lg transition duration-300">
                        Lanjut
                    </button>
                </div>

                <!-- Langkah 3: Konfirmasi dan Pembayaran -->
                <div class="step step-3 hidden">
                    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Konfirmasi Reservasi</h2>
                    <form id="confirmationForm" action="{{ route('reservation.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="services_id" id="confirmServices">
                        {{-- @foreach ($services as $key => $service)
                            <div
                                class="flex flex-col items-start p-6 border rounded-lg hover:bg-gray-50 transition duration-300">
                                <div class="flex items-center">
                                    <input type="checkbox" id="{{ $service['service_id'] }}" name="services[]"
                                        value="{{ $service['service_id'] }}" data-price="{{ $service['price'] }}"
                                        class="h-5 w-5">
                                    <label for="service{{ $key }}" class="text-lg text-gray-800 ml-3">
                                        <span class="text-2xl">{{ $service['name'] }}</span> Rp
                                        {{ number_format($service['price'], 0, ',', '.') }}
                                    </label>
                                </div>
                            </div>
                        @endforeach --}}
                        <input type="hidden" name="booking_date" id="confirmDate">
                        <input type="hidden" name="total_cost" id="confirmTotalHarga">
                        <input type="hidden" name="time" id="confirmTime">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-gray-600 font-medium">Nama Lengkap:</label>
                            <input type="text" id="name" name="name"
                                class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-gray-600 font-medium">Email:</label>
                            <input type="email" id="email" name="email"
                                class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block mb-2 text-gray-600 font-medium">Nomor Telepon:</label>
                            <input type="text" id="phone" name="phone"
                                class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                                required>
                        </div>

                        <h3 class="text-xl font-bold mb-4 text-gray-700">Metode Pembayaran</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            @foreach ($payments as $key => $payment)
                                <div
                                    class="flex flex-col items-start p-6 border rounded-lg hover:bg-gray-50 transition duration-300">
                                    <div class="flex items-center">
                                        <input type="radio" id="payment{{ $payment['payment_id'] }}" name="payment_id"
                                            value="{{ $payment['payment_id'] }}" class="h-5 w-5">
                                        <label for="payment{{ $payment['payment_id'] }}"
                                            class="text-lg text-gray-800 ml-3">
                                            <span class="text-2xl">{{ $payment['payment_method'] }}</span>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <p class="text-gray-600 mb-6">Silakan transfer pembayaran Anda ke akun <strong>DANA:
                                08123456789</strong> atas nama <strong>Salon Rama</strong>. Unggah bukti pembayaran di
                            bawah.</p>
                        <div class="mb-6">
                            <label for="image_path" class="block mb-2 text-gray-600 font-medium">Unggah Bukti
                                Pembayaran:</label>
                            <input type="file" id="image_path" name="image_path"
                                class="block w-full border-gray-300 rounded-lg shadow-sm p-3 focus:ring-[#FFA589] focus:border-[#FFA589]"
                                accept="image/*" required>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-300 pt-4">
                            <span class="text-lg font-semibold text-gray-700">Total Harga:</span>
                            <span id="total_cost" class="text-xl font-extrabold text-gray-900">Rp 0</span>
                        </div>

                        <button type="submit" id="finishbutton"
                            class="w-full py-3 px-6 bg-gradient-to-r from-[#FFA589] to-[#FF8C66] text-white font-bold rounded-lg hover:opacity-90 shadow-lg transition duration-300">
                            Konfirmasi dan Kirim
                        </button>
                    </form>
                </div>

                <!-- Notifikasi Status Reservasi -->
                <div id="reservation-status" class="hidden mt-8 p-6 bg-green-100 text-blue-800 rounded-lg shadow-md">
                    <h3 class="font-bold text-lg">Reservasi Anda telah diterima!</h3>
                    <p class="mt-2">Terima kasih, detail reservasi Anda telah kami proses. Kami akan menghubungi Anda
                        segera.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('goToStep2').addEventListener('click', function() {
            const selectedServices = Array.from(document.querySelectorAll('input[name="services[]"]:checked')).map(
                checkbox => checkbox.value);

            if (selectedServices.length === 0) {
                alert('Pilih minimal satu layanan.');
                return;
            }

            document.getElementById('confirmServices').value = selectedServices.join(', ');

            document.querySelector('.step-1').classList.add('hidden');
            document.querySelector('.step-2').classList.remove('hidden');
        });

        document.getElementById('goToStep3').addEventListener('click', function() {
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;

            if (!date || !time) {
                alert('Pilih tanggal dan waktu.');
                return;
            }

            document.getElementById('confirmDate').value = date;
            document.getElementById('confirmTime').value = time;

            document.querySelector('.step-2').classList.add('hidden');
            document.querySelector('.step-3').classList.remove('hidden');
        });

        document.getElementById('finishbutton').addEventListener('click', function(event) {
         event.preventDefault(); // Mencegah reload halaman
         document.querySelector('.step-3').classList.add('hidden');
         document.getElementById('reservation-status').classList.remove('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"][data-price]');
            const totalHargaEl = document.getElementById('total_cost');
            const totalHargaInput = document.getElementById('confirmTotalHarga'); // input hidden untuk total harga

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    let totalHarga = 0;

                    checkboxes.forEach(box => {
                        if (box.checked) {
                            totalHarga += parseInt(box.getAttribute('data-price'));
                        }
                    });

                    totalHargaEl.textContent = `Rp ${totalHarga.toLocaleString('id-ID')}`;
                    totalHargaInput.value =
                    totalHarga; // Set the totalHarga value to the hidden input field
                });
            });
        });
    </script>
@endsection
