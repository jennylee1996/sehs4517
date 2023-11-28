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

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('/new-activities', function () {
    return view('new-activities');
});

Route::prefix('new-activities')->group(function () {
    Route::get('sports', function () {
        return view('sports');
    });

    Route::get('languages', function () {
        return view('languages');
    });

    Route::get('leadership-camp', function () {
        return view('leadership-camp');
    });

    // add route for 'enrollment' page
    Route::get('/enrollment', 'App\Http\Controllers\ActivitiesController@showForm' );
    
    // add route for 'enrollment' page after submitting request form
    Route::post('/enrollment-submit', [App\Http\Controllers\Enrolled_activitiesController::class, 'enrollment'])->name('enrollment-submit');
});

Route::get('/youth-services', function () {
    return view('youth-services');
});

Route::prefix('youth-services')->group(function () {
    Route::get('education', function () {
        return view('education');
    });

    Route::get('counselling', function () {
        return view('counselling');
    });

    Route::get('volunteer', function () {
        return view('volunteer');
    });
});

Route::get('/welling-for-youths', function () {
    return view('welling-for-youths');
});

Route::prefix('welling-for-youths')->group(function () {
    Route::get('smoking-cessation', function () {
        return view('smoking-cessation');
    });

    Route::get('alcohol-consumption-control', function () {
        return view('alcohol-consumption-control');
    });
});

Route::get('/mental-health-tips', function () {
    return view('mental-health-tips');
});

Route::prefix('mental-health-tips')->group(function () {
    Route::get('build-self-confidence', function () {
        return view('build-self-confidence');
    });

    Route::get('engage-new-friends', function () {
        return view('engage-new-friends');
    });

    Route::get('manage-stress', function () {
        return view('manage-stress');
    });
});

Route::get('/leisure-zone', function () {
    return view('leisure-zone');
});

Route::prefix('leisure-zone')->group(function () {

    Route::get('questionnaire', function () {
        return view('questionnaire');
    });

    Route::get('game', function () {
        return view('game');
    });
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/login', function () {
//    return view('login');
//});

Route::get('/login', function () {
    return view('auth.loginR1');
})->name('login');

// add route for 'login' page after submitting request form
Route::post('/login-submit', [App\Http\Controllers\Auth\LoginControllerR1::class, 'authenticate'])->name('login-submit');

// add route for 'logout' page
Route::get('/logout', [App\Http\Controllers\Auth\LogoutControllerR1::class, 'logout'])->name('logout');

// add route for 'register' page
Route::get('/register', function () {
    return view('auth.registerR1');
})->name('register');

// add route for 'register' page after submitting request form
Route::post('/register-submit', [App\Http\Controllers\Auth\RegisterControllerR1::class, 'register'])->name('register-submit');

// add route for 'member-profile' page
Route::get('/member-profile', [App\Http\Controllers\MemberProfileController::class, 'show'])->name('member-profile');

// add route for 'member-enrolled-activities' page
Route::get('/member-enrolled-activities', [App\Http\Controllers\MemberEnrolledActivitiesController::class, 'show'])->name('member-enrolled-activities');

// useless
/*
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
*/

// Route::get('/admin/',[AdminController::class,'index'])->name("admins");

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

