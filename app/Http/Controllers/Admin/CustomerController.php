<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Fetch customers only (assuming customers have the 'customer' role)
        $customers = User::where('role', 0)->get();
        return view('admin.customers.index', compact('customers'));
    }

    public function show(User $customer)
    {
        // Fetch the rental history for the customer
        $rentals = Rental::where('user_id', $customer->id)->get();
        
        // Return the view with customer and their rental history
        return view('admin.customers.show', [
            'customer' => $customer,
            'rentals' => $rentals
        ]);
    }


}
