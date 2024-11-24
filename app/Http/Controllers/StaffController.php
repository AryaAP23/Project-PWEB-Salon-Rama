<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
        User::create([
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

    public function edit(User $user){
        // dd("user");
        return view('owner.staff.edit', compact('user'));
    }

    public function update(Request $request, User $user){
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
