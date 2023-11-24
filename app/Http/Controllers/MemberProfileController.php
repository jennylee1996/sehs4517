<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class MemberProfileController extends Controller
{
    public function show()
    {
        $id = 2;
        // create user obj by selecting member id
        $user = User::find($id);

        return view('member-profile', ['user' => $user]);
    }
}