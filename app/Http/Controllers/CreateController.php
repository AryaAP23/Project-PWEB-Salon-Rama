<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\staff;
class CreateController extends Controller
{
    public function create_controller(){
        return view('staff.create');
    }
}
