@extends('admin.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="container">
            <h1>Edit Car</h1>

            <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $car->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" value="{{ $car->brand }}" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" name="model" class="form-control" value="{{ $car->model }}" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" name="year" class="form-control" value="{{ $car->year }}" required>
                </div>
                <div class="mb-3">
                    <label for="car_type" class="form-label">Car Type</label>
                    <input type="text" name="car_type" class="form-control" value="{{ $car->car_type }}" required>
                </div>
                <div class="mb-3">
                    <label for="daily_rent_price" class="form-label">Daily Rent Price</label>
                    <input type="number" step="0.01" name="daily_rent_price" class="form-control" value="{{ $car->daily_rent_price }}" required>
                </div>
                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <select name="availability" class="form-control">
                        <option value="1" {{ $car->availability ? 'selected' : '' }}>Available</option>
                        <option value="0" {{ !$car->availability ? 'selected' : '' }}>Not Available</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Car Image</label>
                    @if($car->image)
                        <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" width="100">
                    @endif
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>
</main>

@endsection
