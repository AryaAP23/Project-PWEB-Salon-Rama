<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register_controller(){
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'alamat' => 'required|string|max:500',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if (\App\Models\User::where('phone', $request->phone)->exists()) {
            return redirect()->back()->withErrors(['phone' => 'Nomer Telepon sudah digunakan. Silakan gunakan nomer telepon lain.']);
        }
        if (\App\Models\User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email sudah digunakan. Silakan gunakan email lain.']);
        }
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'is_admin' => false,
            'is_staff' => false,
        ]);
        Auth::login($user);// Login setelah registrasi
        return redirect()->route('homepage'); // Ganti dengan halaman tujuan setelah login
        
    }
    
    public function login_form()
    {
        return view('auth.loginform');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(''); // Ganti '/dashboard' dengan halaman yang diinginkan setelah login
        }
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}