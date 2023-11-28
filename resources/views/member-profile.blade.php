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
                <li>Profile</li>
            </ol>
            <h2>Member Profile</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Member Profile') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register-submit') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Member ID') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->id }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->fname }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->lname }}</p>

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->dob }}</p>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No.') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->phone }}</p>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->email }}</p>

                                    </div>
                                </div>

                                <!--<div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>-->
                            </form>
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
                <li>個人資料</li>
            </ol>
            <h2>個人資料</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">個人資料</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register-submit') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="id" class="col-md-4 col-form-label text-md-right">會員編號</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->id }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-md-4 col-form-label text-md-right">名字</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->fname }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-md-4 col-form-label text-md-right">姓氏</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->lname }}</p>

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">生日日期</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->dob }}</p>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">電話號碼</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->phone }}</p>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">電郵</label>

                                    <div class="col-md-6">
                                        <p>{{ $user->email }}</p>

                                    </div>
                                </div>

                                <!--<div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection