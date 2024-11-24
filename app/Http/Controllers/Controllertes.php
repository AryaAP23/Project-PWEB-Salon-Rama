<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Controllertes extends Controller
{
    public function pembayaran_controller(){
        // return 'Ini halaman Pembayaran';
        return view('pembayaran');
    }
}