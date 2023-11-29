@extends('admins.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Member</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item">Member</li>

        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Members</h5>
                    <p></p>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('admin.members-downloadPDF',['download'=>'pdf'])}}">Download PDF</a>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Birthday</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->fname }}</td>
                                <td>{{ $member->lname }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->dob }}</td>

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
