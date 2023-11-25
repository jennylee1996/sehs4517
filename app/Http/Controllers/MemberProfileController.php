<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class MemberProfileController extends Controller
{
    public function show()
    {
        // create user obj by selecting member id
        $id = auth()->user()->id;

        $user = User::find($id);

        return view('member-profile', ['user' => $user]);
    }
}