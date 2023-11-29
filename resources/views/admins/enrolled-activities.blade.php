@extends('admins.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Activities</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item">Enrolled Activity Histories</li>

        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Enrolled Activity Histories</h5>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('admin.enrolled-activities-downloadPDF',['download'=>'pdf'])}}">Download PDF</a>
                    </div>
                    <h6 class="card-title"></h6>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">Activity Name</th>
                            <th scope="col">Activity Date</th>
                            <th scope="col">Enrolled Member</th>
                            <th scope="col">Member Phone</th>
                            <th scope="col">Member Enrolled Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($enrolledActivities as $enrolledActivity)
                            <tr>
                                <td>{{ $enrolledActivity->activities->acty_name }}</td>
                                <td>{{ $enrolledActivity->activities->acty_start_date . " To " . $enrolledActivity->activities->acty_end_date }}</td>
                                <td>{{ $enrolledActivity->users->fname . " " . $enrolledActivity->users->lname}}</td>
                                <td>{{ $enrolledActivity->users->phone}}</td>
                                <td>{{ $enrolledActivity->enroll_date }}</td>

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
