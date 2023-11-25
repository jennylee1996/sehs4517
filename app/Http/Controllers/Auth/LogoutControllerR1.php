<?php

namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LogoutControllerR1 extends Controller
{
    use AuthenticatesUsers;

    public function logout()
    {
        {
            Auth::logout();
    
            return redirect('/login');
        }
    }
}