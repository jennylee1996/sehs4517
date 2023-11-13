<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get("/docters",function ()
{
    return view('docter');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::view('/services', 'services');

// Route::get('/admin/',[AdminController::class,'index'])->name("admins");

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

