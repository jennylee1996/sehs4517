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
        $id = 2;
        // create user obj by selecting member id
        $data = DB::table('members')
            ->join('enrolled_activities', 'members.id', '=', 'enrolled_activities.member_id')
            ->join('activities', 'activities.id', '=', 'enrolled_activities.activity_id')
            ->where('members.id', '=', $id)
            ->select('activities.id', 'activities.acty_name', 'activities.acty_start_date', 'enrolled_activities.enroll_date')
            ->get();

        return view('member-enrolled-activities', ['data' => $data]);   
    }
}