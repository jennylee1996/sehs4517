<?php

namespace App\Http\Controllers\Admin;

use App\Models\EnrolledActivities;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class EnrolledActivitiesController extends Controller
{
    public function index()
    {
        $activities = EnrolledActivities::all();
        return view('admins.activities', compact('activities'));
    }

    public function activities()
    {
        return $this->hasMany('App\Models\Activities');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function downloadPDF(Request $request)
    {
        $members = User::where('user_status', 1)->get();

        $data = [
            'members' => $members,
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdf.members', $data);
            $today = date('Y-m-d');
            return $pdf->download('MemberList ' .$today . '.pdf');
        }

        return view('admins.members', compact('members'));
    }
}
