<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceOwnerController extends Controller
{

    public function service_owner_controller(){
        $service = service::all();
        return view('owner.service.service', compact('service'));
    }

    public function create(){
        return view('owner.service.create');
    }

    public function store(Request $request){
        Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'is_available' => $request->is_available
        ]);
        return redirect()->route('service_owner');
    }

    public function edit(Service $service){
        // dd("service");
        return view('owner.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service){
        $service->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'is_available' => $request->is_available,
        ]);
        return redirect()->route('service_owner');
    }

    public function delete(Request $request, Service $service) {
        $service->delete();
        return redirect()->route('service_owner');
    }

}
