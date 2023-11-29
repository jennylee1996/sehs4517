<?php

namespace App\Http\Controllers\Admin;


use App\Models\activities;
use App\Models\ActivityTypes;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activities::orderBy('acty_start_date', 'asc')->where('acty_status', 1)->get();
        return view('admins.activities', compact('activities'));
    }

    public function edit($activityId)
    {
        $activity = Activities::findOrFail($activityId);
        $activityType = ActivityTypes::all();
        return view('admins.activities-edit', compact('activity', 'activityType'));
    }

    public function create()
    {
        $activityType = ActivityTypes::all();
        return view('admins.activities-create', compact('activityType'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_id' => 'required',
            'acty_name' => 'required',
            'acty_desc' => 'required',
            'acty_start_date' => 'required',
            'acty_end_date' => 'required',
            'capacity' => 'required',
        ]);
        $validatedData['acty_status'] = 1;
        $activity = Activities::create($validatedData);
        return redirect()->route('admin.activities')->with('success', 'Activity '. $activity->acty_name .' created successfully');
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'type_id' => 'required',
            'acty_name' => 'required',
            'acty_desc' => 'required',
            'acty_start_date' => 'required',
            'acty_end_date' => 'required',
            'capacity' => 'required',
        ]);

        $activity = Activities::findOrFail($id);
        $activity->update($validatedData);

        return redirect()->route('admin.activities')->with('success', 'Activity '. $activity->acty_name .' updated successfully');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $activity = Activities::find($id);
        $activity->update(['acty_status' => 0]);

        return redirect()->route('admin.activities')->with('success', 'Activity ' . $activity->acty_name .' deleted successfully');
    }

    public function downloadPDF(Request $request)
    {
        $activities = Activities::orderBy('acty_start_date', 'asc')->where('acty_status', 1)->get();

        $data = [
            'activities' => $activities,
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdf.activities', $data);
            $today = date('Y-m-d');
            return $pdf->download('Activity List ' .$today . '.pdf');
        }

        return view('admins.activities');
    }
}
