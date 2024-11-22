<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class WorkshopController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('role:admin'),
        ];
    }

    public function index()
    {
        $workshops = Workshop::all();
        return view('workshops.index', compact('workshops'));
    }

    public function create()
    {
        return view('workshops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'capacity' => 'required|integer',
        ]);

        Workshop::create($request->all());
        return redirect()->route('workshops.index')->with('success', 'Workshop created successfully');
    }

    public function show(Workshop $workshop, $id)

    {
        $workshop = Workshop::findOrFail($id);
        $workshop->date = \Carbon\Carbon::parse($workshop->date)->format('Y-m-d'); // Format to 'YYYY-MM-DD'
        return view('workshops.show', compact('workshop'));
    }

    public function edit(Workshop $workshop)
    {
        // Format the date for the input field
        $workshop->date = \Carbon\Carbon::parse($workshop->date)->format('Y-m-d');
        return view('workshops.edit', compact('workshop'));
    }


    public function update(Request $request, Workshop $workshop)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'capacity' => 'required|integer',
        ]);

        $workshop->update($request->all());
        return redirect()->route('workshops.index')->with('success', 'Workshop updated successfully');
    }

    public function destroy(Workshop $workshop)
    {
        $workshop->delete();
        return redirect()->route('workshops.index')->with('success', 'Workshop deleted successfully');
    }

    public function cancel($workshopId)
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Find the workshop the user is registered for
        $workshop = Workshop::findOrFail($workshopId);

        // Detach the user from the workshop (cancel registration)
        $user->workshops()->detach($workshop);

        // Redirect back to the dashboard with a success message
        return redirect()->route('view.dashboard')->with('success', 'You have successfully canceled your registration for the workshop.');
    }
}
