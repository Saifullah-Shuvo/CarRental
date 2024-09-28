@extends('admin.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="container mt-5">
            <h2 class="mb-4">Edit Rental</h2>

            <form action="{{ route('admin.rentals.update', $rental->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $rental->start_date }}" required>
                </div>

                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $rental->end_date }}" required>
                </div>

                <div class="form-group">
                    <label for="total_cost">Total Cost</label>
                    <input type="number" class="form-control" id="total_cost" name="total_cost" value="{{ $rental->total_cost ?? old('total_cost') }}" step="0.01" required>
                </div>                

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Pending" {{ $rental->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Ongoing" {{ $rental->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="Completed" {{ $rental->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Canceled" {{ $rental->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update Rental</button>
                <a href="{{ route('admin.rentals') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>

    </div>
</main>
@endsection
