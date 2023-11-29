<?php

use App\Http\Controllers\Admin\MembersController;
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
    Route::post('/enrollment-submit', [App\Http\Controllers\EnrolledActivitiesController::class, 'enrollment'])->name('enrollment-submit');
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
        $input = "";
        $final_mark="";
    return view('questionnaire', ['input' => $input,'final_mark'=>$final_mark]);
    });

    Route::post('questionnaire', 'App\Http\Controllers\FormController@handlePostForm');

    Route::get('quiz-game', function () {
        return view('quiz-game');
    });

    Route::get('snake-game', function () {
        return view('snake-game');
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

// Admin
Route::get('/admin-login', function () {
    return view('admins.login');
})->name('admin-login');

// add route for 'admin-login' page after submitting request form
Route::post('/admin-login-submit', [App\Http\Controllers\Admin\AdminController::class, 'authenticate_admin'])->name('admin-login-submit');

Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

Route::prefix('admin')->group(function () {
    Route::get('members', [MembersController::class, 'index']);
    Route::get('members-downloadPDF', [MembersController::class, 'downloadPDF'])->name('admin.members-downloadPDF');
    Route::get('activities', [\App\Http\Controllers\Admin\ActivitiesController::class, 'index'])->name('admin.activities');
    Route::get('activities/create', [\App\Http\Controllers\Admin\ActivitiesController::class, 'create'])->name('admin.activities-create');
    Route::put('activities/store', [\App\Http\Controllers\Admin\ActivitiesController::class, 'store'])->name('admin.activities-store');
    Route::get('activities/{id}/edit', [\App\Http\Controllers\Admin\ActivitiesController::class, 'edit'])->name('admin.activities-edit');
    Route::put('activities/{id}/update', [\App\Http\Controllers\Admin\ActivitiesController::class, 'update'])->name('admin.activities-update');
    Route::get('activities/{id}/delete', [\App\Http\Controllers\Admin\ActivitiesController::class, 'delete'])->name('admin.activities-delete');
    Route::get('activities-downloadPDF', [\App\Http\Controllers\Admin\ActivitiesController::class, 'downloadPDF'])->name('admin.activities-downloadPDF');
    Route::get('enrolled-activities', [\App\Http\Controllers\Admin\EnrolledActivitiesController::class, 'index']);
    Route::get('enrolled-activities-downloadPDF', [\App\Http\Controllers\Admin\EnrolledActivitiesController::class, 'downloadPDF'])->name('admin.enrolled-activities-downloadPDF');
});



