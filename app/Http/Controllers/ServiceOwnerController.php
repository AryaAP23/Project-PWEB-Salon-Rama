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
}
