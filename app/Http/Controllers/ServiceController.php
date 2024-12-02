<?php
namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service_controller()
    {
    $service = service::all();
    return view('service', compact('service'));
    }

    public function search_service_controller(Request $request)
    {
        // Ambil kata kunci dari input form (search bar)
        $search = $request->input('search', ''); // Default adalah string kosong
    
        // Query data berdasarkan pencarian
        $services = Service::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%");
        })->get();
    
        // Kirim data ke view
        return view('service', compact('services', 'search'));
    }
}