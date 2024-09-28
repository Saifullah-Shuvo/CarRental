<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        return view('frontend.app');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function rental(){
        $cars = Car::all();
        return view('frontend.pages.rental',compact('cars'));
    }

    public function rental_details($id)
    {
        // Retrieve the car details by ID
        $car = Car::findOrFail($id);

        // Retrieve the authenticated user data
        $user = auth()->user();  // or you can use Auth::user();

        // Pass both car and user data to the view
        return view('frontend.pages.rental_details', compact('car', 'user'));
    }


    public function contact(){
        return view('frontend.pages.contact');
    }
}
