@extends('admins.layouts.app')
@section('content')
    <form action="{{ route('admin.activities-store') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <h5 class="card-title">Create Activity</h5>

            <div class="row mb-3">
                <label for="type_id" class="col-sm-2 col-form-label">Activity Type</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="type_id" name="type_id" required>
                        <option selected="">Please Select</option>
                        @foreach($activityType as $type)
                            <option value="{{ $type->id }}" >{{$type->type_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="acty_name" class="col-sm-2 col-form-label">Activity Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="acty_name" name="acty_name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="acty_desc" class="col-sm-2 col-form-label">Activity Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="acty_desc" name="acty_desc" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="acty_start_date" class="col-sm-2 col-form-label">Activity Start Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="acty_start_date" name="acty_start_date" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="acty_end_date" class="col-sm-2 col-form-label">Activity End Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="acty_end_date" name="acty_end_date" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="capacity" name="capacity" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
