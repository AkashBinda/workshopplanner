<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Workshop;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // DashboardController.php

    // DashboardController method
    public function index()
    {
        // Fetch the user's registered workshops
        $userWorkshops = auth()->user()->workshops; // This will return a collection of workshops

        // Fetch available workshops
        $workshops = Workshop::all(); // Or use a filter based on your requirements

        return view('dashboard', compact('userWorkshops', 'workshops'));
    }


        // User.php (User model)

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }


}
