@extends('admins.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Activities</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Activities</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Activities </h5>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{route('admin.activities-downloadPDF',['download'=>'pdf'])}}">Download PDF</a>
                        </div>
                        <h5 class="card-title"></h5>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div style="text-align: right;"><a href="{{ route('admin.activities-create') }}" class="btn btn-info">Create</a></div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Activity Name</th>
                                <th scope="col">Activity Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Capacity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $activity->id }}</td>
                                    <td>{{ $activity->acty_name }}</td>
                                    <td>{{ $activity->activityTypes->type_name }}</td>
                                    <td>{{ $activity->acty_desc }}</td>
                                    <td>{{ $activity->acty_start_date }}</td>
                                    <td>{{ $activity->acty_end_date }}</td>
                                    <td>{{ $activity->capacity }}</td>
                                    <td>
                                        @if (\Carbon\Carbon::now('Asia/Hong_Kong')
                                            ->between(new \Carbon\Carbon($activity->acty_start_date, 'Asia/Hong_Kong'),
                                            new \Carbon\Carbon($activity->acty_end_date, 'Asia/Hong_Kong')))
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Inactive</span>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.activities-edit', $activity->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.activities-delete', $activity->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
