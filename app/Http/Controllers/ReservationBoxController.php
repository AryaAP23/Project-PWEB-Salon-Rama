<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationBoxController extends Controller
{
    public function reservation_box_controller(){
        return view('owner.reservation_box');
    }
}
