<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use App\Models\EnrolledActivities;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            $today = date('Y-m-d');
            $members = User::where('user_status', 1)->count();
            $activities = Activities::where('acty_status', 1)
                ->where('acty_start_date', '<=', $today)
                ->where('acty_end_date', '>=', $today)
                ->count();
            $enrolledMembers  = EnrolledActivities::where('enroll_status', 1)->count();
            return view('admins.index', compact('members', 'activities', 'enrolledMembers'));
        }

        return redirect('admin-login')->with('error', 'Invalid Message');
    }

    public function authenticate_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->user_role == 1) {

                return redirect()->intended('admin');
            }
        }

        return redirect('admin-login')->with('error', 'Invalid Message');
    }

    public function logout()
    {
        {
            Auth::logout();
    
            return redirect('admin-login');
        }
    }
}
