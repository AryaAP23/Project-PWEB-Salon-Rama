<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomepageController extends Controller
{
    public function homepage_controller(){
        return view('homepage');
    }
}