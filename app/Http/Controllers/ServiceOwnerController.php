<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceOwnerController extends Controller
{
    public function service_owner_controller(){
        return view('owner.service.service');
    }
}
