<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginControllerR1 extends Controller
{
    use AuthenticatesUsers;

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();

            if (Auth::user()->user_role == 0)
            {
                return redirect('/');
            }
        }

        return back()->with(['error' => 'Login Gagal']);
    }
}