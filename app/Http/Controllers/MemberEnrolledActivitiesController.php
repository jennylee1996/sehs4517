<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;

class MemberEnrolledActivitiesController extends Controller
{
    public function show()
    {
        // create user obj by selecting user id
        $id = auth()->user()->id;

        $data = DB::table('users')
            ->join('enrolled_activities', 'users.id', '=', 'enrolled_activities.user_id')
            ->join('activities', 'activities.id', '=', 'enrolled_activities.activity_id')
            ->where('users.id', '=', $id)
            ->select('activities.id', 'activities.acty_name', 'activities.acty_start_date', 'enrolled_activities.enroll_date')
            ->get();

        return view('member-enrolled-activities', ['data' => $data]);   
    }
}