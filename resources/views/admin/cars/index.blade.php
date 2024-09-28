@extends('admin.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="container">
            <h1>Cars List</h1>
            <a href="{{ route('admin.cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Car Type</th>
                        <th>Daily Rent Price</th>
                        <th>Availability</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $key=>$car)
                        <tr>
                            <td> {{ $key+1 }}</td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->car_type }}</td>
                            <td>{{ $car->daily_rent_price }}</td>
                            <td>{{ $car->availability ? 'Available' : 'Not Available' }}</td>
                            <td>
                                @if($car->image)
                                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('admin.cars.destroy', $car->id) }}" method="GET" style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete();">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>

<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this car?');
    }
</script>


@endsection
