<?php

use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'tc'])) {
        abort(400);
    }
    session()->put('locale', $locale);
    return redirect()->back();
})->name('change-language');

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

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

