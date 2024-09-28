<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function store(Request $request, $car_id)
    {
        // Validate the request data
        // dd($request->all());
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'total_cost' => 'required|numeric', // Make sure total_cost is numeric
        ]);

        // Fetch the authenticated user and car details
        $user = Auth::user();
        $car = Car::findOrFail($car_id);

        $rental = new Rental([
            'user_id' => $user->id,
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $request->total_cost, // Use the total cost from the frontend
            'status' => 'Pending', // Initial booking status
        ]);

        $rental->save();

        // Redirect with success message
        return redirect()->route('dashboard')->with('success', 'Booking confirmed! You will receive a confirmation email shortly.');
    }
}
