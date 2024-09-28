<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use Illuminate\Http\Request;


class RentalController extends Controller
{
    // Display all rentals
    public function index()
    {
        $rentals = Rental::with('user', 'car')->paginate(10); // Fetch rentals with related user and car
        return view('admin.rentals.rental_management', compact('rentals'));
    }

    // Show form to edit a specific rental
    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        return view('admin.rentals.edit', compact('rental'));
    }

    // Update rental details
    public function update(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->update($request->all());

        return redirect()->route('admin.rentals')->with('success', 'Rental updated successfully.');
    }

    // Delete a rental
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return redirect()->route('admin.rentals')->with('success', 'Rental deleted successfully.');
    }
}
