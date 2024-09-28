@extends('frontend.app')

@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('frontend/img/banner-image-1-1920x300.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Fleet</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <h1 class="text-center mb-4">Booking Details</h1>

    <!-- Customer Information -->
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <strong>Customer Information</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
                    <p><strong>Address:</strong> {{ $user->address ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Car Information -->
    <div class="card shadow mb-4">
        <div class="card-header bg-info text-white">
            <strong>Car Information</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $car->image ? asset('storage/' . $car->image) : asset('images/default-car.png') }}" alt="{{ $car->model }}" class="img-fluid mb-3 rounded">
                </div>
                <div class="col-md-8">
                    <p><strong>Car Name:</strong> {{ $car->name }}</p>
                    <p><strong>Car Model:</strong> {{ $car->model }}</p>
                    <p><strong>Brand:</strong> {{ $car->brand }}</p>
                    <p><strong>Daily Rent Price:</strong> ${{ number_format($car->daily_rent_price, 2) }}</p>
                    <p><strong>Availability:</strong>
                        @if($car->availability)
                            <span class="badge badge-success">Available</span>
                        @else
                            <span class="badge badge-danger">Not Available</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Form -->
    <div class="card shadow mb-4">
        <div class="card-header bg-warning">
            <strong>Booking Information</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('rental.book', $car->id) }}" method="POST">
                @csrf

                <!-- Rental Start Date -->
                <div class="form-group row">
                    <label for="start_date" class="col-md-3 col-form-label">Start Date</label>
                    <div class="col-md-9">
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                </div>

                <!-- Rental End Date -->
                <div class="form-group row">
                    <label for="end_date" class="col-md-3 col-form-label">End Date</label>
                    <div class="col-md-9">
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>
                </div>

                <!-- Total Cost Calculation -->
                <div class="form-group row">
                    <label for="total_cost" class="col-md-3 col-form-label">Total Cost</label>
                    <div class="col-md-9">
                        <input type="text" name="total_cost" id="total_cost" class="form-control" readonly value="">
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="form-group row">
                    <label for="cash_on_delivery" class="col-md-3 col-form-label">Payment Method</label>
                    <div class="col-md-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="cash" checked>
                            <label class="form-check-label" for="cash_on_delivery">
                                BY CASH
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-success"
                        @if(!$car->availability) disabled @endif>
                        Submit Booking
                    </button>
                </div>

            </form>
        </div>
    </div>

    <a href="{{ route('rental') }}" class="btn btn-primary mt-4">Back to Rentals</a>
</div>

<script>
    document.getElementById('end_date').addEventListener('change', function () {
    let startDate = new Date(document.getElementById('start_date').value);
    let endDate = new Date(document.getElementById('end_date').value);
    let dailyRentPrice = {{ $car->daily_rent_price }};

    if (startDate && endDate && startDate < endDate) {
        let days = (endDate - startDate) / (1000 * 60 * 60 * 24);
        let totalCost = days * dailyRentPrice;
        document.getElementById('total_cost').value = `$${totalCost.toFixed(2)}`;
    }
    });

</script>



@endsection
