<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration page for a specific workshop
    public function show($workshopId)
    {
        $workshop = Workshop::findOrFail($workshopId);
        return view('student.workshop-register', compact('workshop'));
    }

    // Store the registration in the database
    public function store(Request $request, $workshopId)
    {
        $workshop = Workshop::findOrFail($workshopId);

        // Check if the student is already registered
        $user = auth()->user();
        if ($user->workshops()->where('workshop_id', $workshop->id)->exists()) {
            return redirect()->route('dashboard')->with('error', 'You are already registered for this workshop.');
        }

        // Register the student (attach the user to the workshop)
        $user->workshops()->attach($workshop->id);

        // Reduce capacity of the workshop
        $workshop->decrement('capacity');

        return redirect()->route('dashboard')->with('success', 'You have successfully registered for the workshop.');
    }

    public function destroy($workshopId)
    {
        $user = auth()->user();
        $workshop = Workshop::findOrFail($workshopId);

        // Check if the user is registered for the workshop
        if (!$user->workshops()->where('workshop_id', $workshop->id)->exists()) {
            return redirect()->route('dashboard')->with('error', 'You are not registered for this workshop.');
        }

        // Detach the workshop from the user
        $user->workshops()->detach($workshop->id);

        // Increment the capacity of the workshop
        $workshop->increment('capacity');

        return redirect()->route('dashboard')->with('success', 'Registration successfully canceled.');
    }

}
