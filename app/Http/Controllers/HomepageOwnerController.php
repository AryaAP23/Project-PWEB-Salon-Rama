<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageOwnerController extends Controller
{
    public function homepage_controller(){
        return view('owner.homepage');
    }
}
