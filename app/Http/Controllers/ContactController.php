<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_controller()
    {
        return view('contact'); // Pastikan file `resources/views/contact.blade.php` ada
    } 

    // Memproses Formulir
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Logika untuk menyimpan/kirim pesan, misalnya:
        // Contact::create($request->all());

        return redirect()->route('contact.form')->with('success', 'Thank you for your message!');
    }
}
