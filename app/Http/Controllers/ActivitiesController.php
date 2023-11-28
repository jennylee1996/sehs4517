<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
  // retrieves the activities from the database and passes them to the enrollment view
  public function showForm()
  {
      $activities = DB::table('activities')->get()->toArray();
      return view('enrollment', compact('activities'));
  }
    

}
