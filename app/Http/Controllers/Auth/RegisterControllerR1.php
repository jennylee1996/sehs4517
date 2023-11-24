<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // validate registration form input
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'pw' => 'required|string|min:8', // |confirmed
            'dob' => 'required|date', // date_format:Y-m-d
            'phone' => 'required|numeric|min:8',
            'email' => 'required|string|max:255'
        ]);

        // create member obj and insert into db
        $user = User::create([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'pw' => $validatedData['pw'], // Hash::make()
            'dob' => $validatedData['dob'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'user_status' => '1'
        ]);

        return redirect('/login');
    }
}