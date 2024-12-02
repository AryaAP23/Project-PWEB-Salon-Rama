<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilOwnerController extends Controller
{
    public function profil_controller(){
        return view('owner.profil.profil');
    }
}
