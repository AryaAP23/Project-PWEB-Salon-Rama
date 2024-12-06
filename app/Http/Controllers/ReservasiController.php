<?php
// Controller: ReservationController.php
namespace App\Http\Controllers;

use App\Http\Controllers\ReservasiController;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservasiController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $payments = Payment::all();
        return view('user.reservasi',  compact('services', 'payments'));
    }



    public function store(Request $request)
{
    try {
        $request->validate([
            // 'description' => 'nullable|string|max:255', 
            'booking_date' => 'required|date',
            // 'status' => 'required|string|max:50',
            'total_cost' => 'required|numeric',
            'image_path' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'services_id' => 'required',
            // 'user_id' => 'required|integer',
            'payment_id' => 'nullable|integer'
        ]);
        
        // Store the proof of payment file if present
        if ($request->hasFile('image_path')) {
            $validatedData['image_path'] = $request->file('image_path')->store('proof-of-payment-images');
        }
        // Create a new reservation with the validated data
        Reservation::create([
            "description" => "ini des",
            "booking_date" => $request["booking_date"],
            "total_cost" => $request['total_cost'],
            "image_path" => $request["image_path"],
            "service_id" => $request["services_id"],
            "user_id" => Auth::user()->user_id,
            "payment_id" => $request["payment_id"]
        ]);
    } catch (\Throwable $th) {
        dd($th);
    }
    // Validate the incoming request
    

    // Redirect with success message
    return redirect()->route('reservation.index')->with('success', 'Reservation created successfully!');
}

}
