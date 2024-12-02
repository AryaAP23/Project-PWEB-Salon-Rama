<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function contact_controller(){
        return view('contact');
    }
}