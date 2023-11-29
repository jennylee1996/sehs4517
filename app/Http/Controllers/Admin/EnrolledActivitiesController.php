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
        $enrolledActivities = EnrolledActivities::where('enroll_status', 1)->orderBy('enroll_date', 'asc')->get();
        return view('admins.enrolled-activities', compact('enrolledActivities'));
    }

    public function downloadPDF(Request $request)
    {
        $enrolledActivities = EnrolledActivities::where('enroll_status', 1)->orderBy('enroll_date', 'asc')->get();

        $data = [
            'enrolledActivities' => $enrolledActivities,
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdf.enrolled-activities', $data);
            $today = date('Y-m-d');
            return $pdf->download('Enrolled Activities List ' .$today . '.pdf');
        }

        return view('admins.enrolled-activities');
    }
}
