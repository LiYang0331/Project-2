<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function showStaff()
    {
        $staff = Staff::all();
        return view('/staff', compact('staff'));
    }

    public function showAddStaffForm()
    {
        return view('addstaffform');
    }

    public function storeStaff(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // Modified this line
            'position' => 'required|string|max:255',
        ]);

        // Create a new staff record in the database
        Staff::create($validatedData);

        return redirect()->route('addstaff')->with('success', 'Staff added successfully!');
    }

    public function edit($id)
    {
        $staffMember = Staff::findOrFail($id);
        return view('editstaffform', compact('staffMember'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // Modified this line
            'position' => 'required|string|max:255',
        ]);

        $staffMember = Staff::findOrFail($id);
        $staffMember->update($validatedData);

        return redirect()->route('staff')->with('success', 'Staff updated successfully!');
    }

    public function destroy($id)
    {
        $staffMember = Staff::findOrFail($id);
        $staffMember->delete();

        return redirect()->route('staff')->with('success', 'Staff member deleted successfully!');
    }
}


