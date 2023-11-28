<?php

namespace App\Http\Controllers\Admin;


use App\Models\activities;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        return view('admins.activities', compact('activities'));
    }



    public function downloadPDF(Request $request)
    {
        $activities = Activities::all();

        $data = [
            'activities' => $activities,
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdf.activities', $data);
            $today = date('Y-m-d');
            return $pdf->download('ActivityList ' .$today . '.pdf');
        }

        return view('admins.activities');
    }
}
