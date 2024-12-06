@extends('layouts.template_owner')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-[#FFA589] via-white to-[#FFA589] flex items-center justify-center p-10">
    <div class="w-full max-w-4xl bg-white rounded-3xl shadow-2xl p-8">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-10">Tambah Order Salon</h1>

        <!-- Form Tambah Order -->
        <form action="{{ route('order-store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Nama Customer -->
            <div>
                <label for="customer_name" class="block text-lg font-medium text-gray-700">Nama Customer</label>
                <input type="text" id="customer_name" name="name" class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#FFA589]" placeholder="Masukkan nama customer" required>
            </div>

            <!-- Pilihan Layanan -->
            <div>
                <label class="block text-lg font-medium text-gray-700">Pilih Layanan</label>
                <div class="space-y-3 mt-3">
                    @foreach ($services as $service)
                    <div class="flex items-center">
                        <input type="checkbox" id="service_{{ $service->id }}" name="services[]" value="{{ $service->price }}" class="w-6 h-6 text-[#FFA589] focus:ring-[#FFA589] focus:ring-2" data-price="{{ $service->price }}">
                        <label for="service_{{ $service->id }}" class="ml-3 text-lg text-gray-800">
                            {{ $service->name }} - <span class="text-gray-600">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pilihan Metode Pembayaran -->
            <div>
                <label class="block text-lg font-medium text-gray-700">Metode Pembayaran</label>
                <div class="flex items-center">
                    <input type="radio" id="tunai" name="payment_method" value="1" class="mr-2" required>
                    <label for="tunai" class="text-lg text-gray-800">Tunai</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="qris" name="payment_method" value="2" class="mr-2" required>
                    <label for="qris" class="text-lg text-gray-800">QRIS</label>
                </div>
            </div>

            <!-- Total Harga -->
            <div class="flex items-center justify-between border-t border-gray-300 pt-4">
                <span class="text-lg font-semibold text-gray-700">Total Harga:</span>
                <span id="total_harga" class="text-xl font-extrabold text-gray-900">Rp 0</span>
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="submit" class="bg-[#FFA589] hover:opacity-90 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                    Tambah Order
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][data-price]');
        const totalHargaEl = document.getElementById('total_harga');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                let totalHarga = 0;
                checkboxes.forEach(box => {
                    if (box.checked) {
                        totalHarga += parseInt(box.getAttribute('data-price'));  // Ambil harga dari data-price
                    }
                });

                // Perbarui total harga dengan format Rupiah
                totalHargaEl.textContent = `Rp ${totalHarga.toLocaleString('id-ID')}`;
            });
        });
    });
</script>
@endsection
