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

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/new-services', function () {
    return view('new-services');
});

Route::prefix('new-services')->group(function () {
    Route::get('sports', function () {
        return view('sports');
    });
});

Route::get('/youth-services', function () {
    return view('youth-services');
});
Route::get('/welling-for-youths', function () {
    return view('welling-for-youths');
});
Route::get('/welling-for-elders', function () {
    return view('welling-for-elders');
});
Route::get('/leisure-zone', function () {
    return view('leisure-zone');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});



// useless
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

// Route::get('/admin/',[AdminController::class,'index'])->name("admins");

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

