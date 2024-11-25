<?php
// Controller: ReservationController.php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        return view('user.reservasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservation created successfully!');
    }
}
