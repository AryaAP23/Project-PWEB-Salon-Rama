<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;
use App\Models\Payment;
use App\Models\DetailOrder;

class OrderController extends Controller
{
    public function order_controller()
    {
        $services = Service::all();
        return view('owner.order', compact('services'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $cost = $request->services;
        $total_cost = array_sum($cost);
        $value = $request->payment_method;
        $payment_id = intval($value);
       
            Order::create([
                'name' => $request->name,
                'total_cost' => $total_cost,
                'payment_id' => $payment_id,
            ]);
            
        
    


    }
        // Validasi input
        // $validated = $request->validate([
        //     'name'           => 'required|string|max:255', // Nama pelanggan
        //     'service'        => 'required|array',         // Layanan yang dipilih
        //     'payment_method' => 'required|string',        // Metode Pembayaran (tunai/qris)
        //     // 'payment_amount' => 'required|numeric',       // Jumlah pembayaran
        // ]);

        // // Hitung total harga berdasarkan layanan yang dipilih
        // $totalHarga = 0;
        // $selectedServices = Service::whereIn('service_id', $validated['service'])->get();

        // foreach ($selectedServices as $service) {
        //     $totalHarga += $service->price; // Hitung total harga
        // }

        // // Tambahkan nilai payment_amount ke total harga
        // // $totalHarga += $validated['payment_amount'];

        // // Simpan informasi pembayaran
        // $payment = Payment::create([
        //     'payment_method' => $validated['payment_method'],
        // ]);

        // // Simpan order ke tabel 'orders'
        // $order = Order::create([
        //     'name'       => $validated['name'],
        //     'total_cost' => $totalHarga, // Total harga termasuk payment_amount
        //     'payment_id' => $payment->id,
        // ]);

        // // Simpan detail layanan ke tabel 'detail_orders'
        // foreach ($validated['service'] as $serviceId) {
        //     DetailOrder::create([
        //         'order_id'   => $order->id,
        //         'service_id' => $serviceId,
        //     ]);
        

    //     // Redirect ke halaman order dengan pesan sukses
    //     return redirect()->route('order_controller')->with('success', 'Order berhasil ditambahkan!');

}
