<?php
namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff_controller()
    {
        $staff = staff::all();
        return view('owner.staff.staff', compact('staff'));
    }

    public function create(){
        return view('owner.staff.create');
    }

    public function store(Request $request){
        Staff::create([
            'name' => $request->name,
            'contact' => $request->contact
        ]);
        return redirect()->route('staff');
    }

    public function edit(Staff $staff){
        return view('owner.staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff){
        $staff->update([
            'name'=> $request->name,
            'contact'=> $request->contact
        ]);
        return redirect()->route('staff');
    }
    public function delete(Request $request, Staff $staff) {
        $staff->delete();
        return redirect()->route('staff');
    }
    
}
