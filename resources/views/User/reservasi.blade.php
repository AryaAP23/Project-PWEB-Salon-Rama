@extends('layouts.template')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#FFA589] via-white to-[#FFA589] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Make Your Appointment</h1>

        <div id="reservation-steps">
            <!-- Step 1: Select Services -->
            <div class="step step-1">
                <h2 class="text-2xl font-semibold mb-4 text-gray-700">Select Services</h2>
                <form id="step1Form">
                    <div class="mb-6">
                        <label class="block mb-3 text-gray-600 font-medium">Choose one or more services:</label>
                        <div class="space-y-2">
                            <div>
                                <input type="checkbox" id="service1" name="services[]" value="Consultation (30 min)" class="mr-2">
                                <label for="service1" class="text-gray-700">Consultation (30 min)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Cutting Long Hair (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Cutting Long Hair (1 hour)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Creambath (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Creambath (1 hour)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Hair wash & dry  (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Hair wash & dry (1 hour)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Coloring (Long hair) (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Coloring (Long hair)  (1 hour)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Coloring (Short hair) (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Coloring (Short hair)  (1 hour)</label>
                            </div>
                            <div>
                                <input type="checkbox" id="service2" name="services[]" value="Bleching (1 hour)" class="mr-2">
                                <label for="service2" class="text-gray-700">Bleching (1 hour)</label>
                            </div>
                            <!-- Tambahkan layanan lain jika perlu -->
                        </div>
                    </div>
                    <button type="button" id="goToStep2" class="w-full py-2 px-4 bg-[#FFA589] text-white font-bold rounded-lg shadow-md hover:bg-[#FF8C66] transition duration-300">
                        Next
                    </button>
                </form>
            </div>

            <!-- Step 2: Pick a Date -->
            <div class="step step-2 hidden">
                <h2 class="text-2xl font-semibold mb-4 text-gray-700">Pick a Date</h2>
                <form id="step2Form">
                    <div class="mb-6">
                        <label for="date" class="block mb-2 text-gray-600 font-medium">Select Date:</label>
                        <input type="date" id="date" name="date" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                    </div>
                    <div class="mb-6">
                        <label for="time" class="block mb-2 text-gray-600 font-medium">Select Time:</label>
                        <select id="time" name="time" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                        </select>
                    </div>
                    <button type="button" id="goToStep3" class="w-full py-2 px-4 bg-[#FFA589] text-white font-bold rounded-lg shadow-md hover:bg-[#FF8C66] transition duration-300">
                        Next
                    </button>
                </form>
            </div>

            <!-- Step 3: Confirmation -->
            <div class="step step-3 hidden">
                <h2 class="text-2xl font-semibold mb-4 text-gray-700">Confirmation</h2>
                <form id="confirmationForm" action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="services" id="confirmServices">
                    <input type="hidden" name="date" id="confirmDate">
                    <input type="hidden" name="time" id="confirmTime">

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-gray-600 font-medium">Name:</label>
                        <input type="text" id="name" name="name" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-gray-600 font-medium">Email:</label>
                        <input type="email" id="email" name="email" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block mb-2 text-gray-600 font-medium">Phone:</label>
                        <input type="text" id="phone" name="phone" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:ring-[#FFA589] focus:border-[#FFA589]" required>
                    </div>
                    <button type="submit" class="w-full py-2 px-4 bg-[#FFA589] text-white font-bold rounded-lg shadow-md hover:bg-[#FF8C66] transition duration-300">
                        Confirm
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('goToStep2').addEventListener('click', function () {
        // Ambil semua layanan yang dipilih
        const selectedServices = Array.from(document.querySelectorAll('input[name="services[]"]:checked')).map(checkbox => checkbox.value);

        if (selectedServices.length === 0) {
            alert('Please select at least one service.');
            return;
        }

        // Simpan layanan ke input hidden di step 3
        document.getElementById('confirmServices').value = selectedServices.join(', ');

        // Navigasi ke step berikutnya
        document.querySelector('.step-1').classList.add('hidden');
        document.querySelector('.step-2').classList.remove('hidden');
    });

    document.getElementById('goToStep3').addEventListener('click', function () {
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;

        document.getElementById('confirmDate').value = date;
        document.getElementById('confirmTime').value = time;

        document.querySelector('.step-2').classList.add('hidden');
        document.querySelector('.step-3').classList.remove('hidden');
    });
</script>
@endsection
