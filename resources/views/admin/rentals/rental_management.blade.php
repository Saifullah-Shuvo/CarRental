@extends('admin.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="container mt-5">
            <h2 class="mb-4">Rental Management</h2>

            <!-- Rental Management Table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Manage Rentals</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Car</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- @dd($rentals) --}}
                        <tbody>
                            @forelse($rentals as $rental)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rental->user->name }}</td>
                                <td>{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                                <td>{{ $rental->start_date }}</td>
                                <td>{{ $rental->end_date }}</td>
                                <td>${{ $rental->total_cost }}</td>
                                <td>
                                    {{-- <span class="badge 
                                        {{ $rental->status === 'Ongoing' ? 'badge-success' : 
                                        ($rental->status === 'Pending' ? 'badge-primary' : 
                                        ($rental->status === 'Completed' ? 'badge-secondary' : 'badge-danger')) }}">
                                        {{ $rental->status }}
                                    </span> --}}

                                        {{ ucfirst($rental->status) }}
                                    </span>
                                </td>

                                <td>
                                    <!-- Edit button -->
                                    <a href="{{ route('admin.rentals.edit', $rental->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <!-- Delete button with JS confirmation -->
                                    <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="GET" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this rental?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No Rentals Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination links -->
            <div class="mt-4">
                {{ $rentals->links() }}
            </div>
        </div>

    </div>
</main>
@endsection
