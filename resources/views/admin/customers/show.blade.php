@extends('admin.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="container">
            <h1>Rental History for {{ $customer->name }}</h1>
        
            <div class="row">
                <div class="col-md-12">
                    <h3>Customer Details</h3>
                    <p><strong>Name:</strong> {{ $customer->name }}</p>
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Phone:</strong> {{ $customer->phone }}</p>
                    <p><strong>Address:</strong> {{ $customer->address }}</p>
                </div>
        
                <div class="col-md-12">
                    <h3>Rental History</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Car</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentals as $index => $rental)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $rental->car->name }}</td>
                                    <td>{{ $rental->start_date }}</td>
                                    <td>{{ $rental->end_date }}</td>
                                    <td>{{ $rental->total_cost }}</td>
                                    <td>
                                        <span class="badge {{ $rental->status == 'Ongoing' ? 'badge-success' : ($rental->status == 'Pending' ? 'badge-primary' : ($rental->status == 'Completed' ? 'badge-secondary' : 'badge-danger')) }}">
                                            {{ ucfirst($rental->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection