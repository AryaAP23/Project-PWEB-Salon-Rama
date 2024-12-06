<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    public function staff_controller()
    {
        $user = user::where('is_staff', true)->get();
        return view('owner.staff.staff', compact('user'));
    }

    public function create(){
        return view('owner.staff.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'alamat' => 'nullable|string|max:255',
        ]);
        if (\App\Models\User::where('phone', $request->phone)->exists()) {
            return redirect()->back()->withErrors(['phone' => 'Nomer Telepon sudah digunakan. Silakan gunakan nomer telepon lain.']);
        }
        if (\App\Models\User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Email sudah digunakan. Silakan gunakan email lain.']);
        }
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'email' => trim($request->email),
            'alamat' => $request->alamat,
            'password' => '',
            'is_staff' => true,
            'is_admin' => false
        ]);
        return redirect()->route('staff');
    }

    public function edit(User $user){
        // dd("user");
        return view('owner.staff.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        // dd($user->getKey(), $user->getKeyName());
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'max:15',
                Rule::unique('users', 'phone')->ignore($user->getKey(), $user->getKeyName()),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->getKey(), $user->getKeyName()),
            ],
            'alamat' => 'nullable|string|max:255',
        ]);
    
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => '',
            'is_staff' => true,
            'is_admin' => false
        ]);
        return redirect()->route('staff');
    }
    public function delete(Request $request, User $staff) {
        $staff->delete();
        return redirect()->route('staff');
    }

}