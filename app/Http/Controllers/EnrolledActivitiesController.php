<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\EnrolledActivities;
use App\Models\Activities;
class EnrolledActivitiesController extends Controller
{
  public function enrollment(Request $request)
  {

    $id = $request['activity_id'];
    $activity = Activities::findOrFail($id);
    $activity_end_date = $activity->acty_end_date;

      $validatedData = $request->validate([
          //'user_id' => 'required|numeric|max:255',
          'activity_id' => 'required|numeric|max:255',
          'enroll_status' => 'required|numeric',
          'enroll_date' => [
            'required',
            'date',
            function ($attribute, $enrollDate, $fail) use ($activity_end_date) {
                if ($enrollDate >= $activity_end_date) {
                    $fail('The enrollment date must be before the activity end date.');
                }
            }
        ],
    ]);

     try {
      // create enrollment obj and insert into db
      $id = auth()->user()->id;
      $enrolled_activities = EnrolledActivities::create([
          'user_id' => $id,
          'activity_id' => $validatedData['activity_id'],
          'enroll_date' => $validatedData['enroll_date'],
          'enroll_status' => $validatedData['enroll_status'],

      ]);

      return redirect('/member-enrolled-activities');
        } catch (\Exception $e) {
    return back()->withErrors(['error' => 'Failed to enroll. Please try again.']);
}
  }
}
