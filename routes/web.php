<?php

use App\Http\Controllers\Frontend\RentalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Frontend\PageController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\Frontend\PageController::class, 'about'])->name('about');
Route::get('/rental', [App\Http\Controllers\Frontend\PageController::class, 'rental'])->name('rental');
Route::get('/rental/details/{id}', [App\Http\Controllers\Frontend\PageController::class, 'rental_details'])->middleware(['auth', 'verified','rolemanager:user'])->name('rental.details');
Route::post('/rental/book/{car_id}', [RentalController::class, 'store'])->name('rental.book');
Route::get('/contact', [App\Http\Controllers\Frontend\PageController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.app');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware('auth', 'rolemanager:admin')->prefix('admin')->group(function () {
    Route::get('/cars', [App\Http\Controllers\Admin\CarController::class, 'index'])->name('admin.cars');
    Route::get('/cars/create', [App\Http\Controllers\Admin\CarController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars/store', [App\Http\Controllers\Admin\CarController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/edit/{id}', [App\Http\Controllers\Admin\CarController::class, 'edit'])->name('admin.cars.edit');
    Route::post('/cars/update/{id}', [App\Http\Controllers\Admin\CarController::class, 'update'])->name('admin.cars.update');
    Route::get('/cars/destroy/{id}', [App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('admin.cars.destroy');

    Route::get('/rentals', [App\Http\Controllers\Admin\RentalController::class, 'index'])->name('admin.rentals');
    Route::get('/rentals/edit/{id}', [App\Http\Controllers\Admin\RentalController::class, 'edit'])->name('admin.rentals.edit');
    Route::post('/rentals/update/{id}', [App\Http\Controllers\Admin\RentalController::class, 'update'])->name('admin.rentals.update');
    Route::get('/rentals/destroy/{id}', [App\Http\Controllers\Admin\RentalController::class, 'destroy'])->name('admin.rentals.destroy');

    Route::get('/customers/index', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('admin.customers.index');
    Route::get('/customers/show/{customer}', [App\Http\Controllers\Admin\CustomerController::class, 'show'])->name('admin.customers.show');
});

// Frontend routes
// Route::get('/', [App\Http\Controllers\Frontend\PageController::class, 'home']);
// Route::get('/cars', [App\Http\Controllers\Frontend\CarController::class, 'index']);
// Route::post('/rent', [App\Http\Controllers\Frontend\RentalController::class, 'store'])->middleware('auth');
// Route::get('/my-rentals', [App\Http\Controllers\Frontend\RentalController::class, 'index'])->middleware('auth');


require __DIR__.'/auth.php';
