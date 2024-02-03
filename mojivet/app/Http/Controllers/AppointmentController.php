<?php

// app/Http/Controllers/AppointmentController.php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('create-appointment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'pet_name' => 'required|string|max:255',
            'pet_type' => 'required|string|max:255',
            'concern' => 'required|string',
        ]);

        Appointment::create([
            'name' => $request->name,
            'date' => $request->date,
            'pet_name' => $request->pet_name,
            'pet_type' => $request->pet_type,
            'concern' => $request->concern,
        ]);

        return redirect()->route('home')->with('success', 'Appointment created successfully!');
    }

    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('home', compact('appointments'));
    }

    public function destroy($id)
    {
        // Delete the teacher
        Appointment::destroy($id);

        return redirect()->route('home')->with('success', 'Teacher deleted successfully.');
    }
}

