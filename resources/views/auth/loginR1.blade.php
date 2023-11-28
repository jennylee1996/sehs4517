@extends('layouts.app')
@section('content')
<br><br><br><br>
<?php
$locale = session('locale');
?>
@if($locale == 'en')
    <div class="container mt-5">
                    <h1 class="p-3 text-center "><!--{{ env('APP_NAME') }}-->
                    <span class="card-header">{{ __('Member Login') }}</span></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card m-3 my-3">

                    <div class="card-body">
                        <form method="POST" class="py-3"  action="{{ route('login-submit') }}">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Registered Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    <a href="{{ route('register') }}" class="btn btn-secondary">{{ __('Register') }}<a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4 text-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if($locale == 'tc')
    <div class="container mt-5">
                    <h1 class="p-3 text-center "><!--{{ env('APP_NAME') }}-->
                    <span class="card-header">會員登入</span></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card m-3 my-3">

                    <div class="card-body">
                        <form method="POST" class="py-3"  action="{{ route('login-submit') }}">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">注冊電郵</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">密碼</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        登入
                                    </button>
                                    <a href="{{ route('register') }}" class="btn btn-secondary">注冊<a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4 text-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<br><br><br><br>
@endsection
