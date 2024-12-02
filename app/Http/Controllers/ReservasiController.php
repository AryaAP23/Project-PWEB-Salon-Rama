<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ReservasiController extends Controller
{
    public function reservasi_controller(){
        return view('User.reservasi');
    }
}