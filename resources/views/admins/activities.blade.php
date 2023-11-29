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
                    <h5 class="card-title">All Activities</h5>
                    <p></p>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('admin.activities-downloadPDF',['download'=>'pdf'])}}">Download PDF</a>
                    </div>

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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->acty_name }}</td>
                                <td>{{ $activity->acty_desc }}</td>
                                <td>{{ $activity->activityTypes->type_name }}</td>
                                <td>{{ $activity->acty_start_date }}</td>
                                <td>{{ $activity->acty_end_date }}</td>
                                <td>{{ $activity->capacity }}</td>
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
