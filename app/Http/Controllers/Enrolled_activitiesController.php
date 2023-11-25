<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Enrolled_activities;
use App\Models\Activities;
class Enrolled_activitiesController extends Controller
{
  public function enrollment(Request $request)
  {
   
      $id = $request['activity_id'];
      $activities = Activities::findOrFail($id);

      $validatedData = $request->validate([ 
          'user_id' => 'required|numeric|max:255',
          'activity_id' => 'required|numeric|max:255',
          'enroll_status' => 'required|numeric',
          'enroll_date' => 'required|date',  // date_format:Y-m-d 
      ]);
     // $validatedData['enroll_date']= date("Y-m-d", strtotime($validatedData['enroll_date']));
     // if($validatedData['enroll_date'] >= $activities['acty_end_date']){
     //   session()->flash('msg', 'Please choose a correct pick-up date.');
     //   return redirect('/activities-enrollment');
     // }
     
      // create enrollment obj and insert into db
      $enrolled_activities = Enrolled_activities::create([
          'user_id' => $validatedData['user_id'],
          'activity_id' => $validatedData['activity_id'],
          'enroll_date' => $validatedData['enroll_date'], 
          'enroll_status' => $validatedData['enroll_status'],

      ]);

      return back()->withStatus('Passed');
  }
}
