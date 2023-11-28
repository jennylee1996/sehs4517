<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolled_activities extends Model
{
    protected $table = 'enrolled_activities';

    protected $fillable = [
        'user_id',
        'activity_id',
        'enroll_date',
        'enroll_status',
        
    ];
}
