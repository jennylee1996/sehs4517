@extends('layouts.app')
@section('content')
<?php
$locale = session('locale');
?>
    @if($locale == 'en')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Enrollment</li>
            </ol>
            <h2>Member Enrolled Activities</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">{{ __('Member Enrolled Activities') }}</div>

                        <div class="card-body">
                                @csrf

                                <table class="table">
                                    
                                    <tbody>
                                        <tr class="">
                                            <td>
                                                <div class="">
                                                    <label for="activity_id" class="">Activity ID</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="acty_name" class="">Activity Name</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="acty_start_date" class="">Activity Start Date</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="enroll_date" class="">Enroll Date</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="enroll_status" class="">Enroll Status</label>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->id }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->acty_name }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->acty_start_date }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->enroll_date }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->enroll_status }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                                </table>

                                <!--<div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if($locale == 'tc')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>已報名活動</li>
            </ol>
            <h2>已報名活動</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">已報名活動</div>

                        <div class="card-body">
                                @csrf

                                <table class="table">
                                    
                                    <tbody>
                                        <tr class="">
                                            <td>
                                                <div class="">
                                                    <label for="activity_id" class="">活動編號</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="acty_name" class="">活動名稱</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="acty_start_date" class="">活動開始日期</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="enroll_date" class="">報名日期</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <label for="enroll_status" class="">報名狀態</label>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->id }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->acty_name }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->acty_start_date }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->enroll_date }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <p>{{ $item->enroll_status }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                                </table>

                                <!--<div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection