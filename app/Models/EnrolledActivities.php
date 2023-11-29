<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrolledActivities extends Model
{
    protected $table = 'enrolled_activities';

    protected $fillable = [
        'user_id',
        'activity_id',
        'enroll_date',
        'enroll_status',

    ];
    public function activities(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Activities', 'activity_id', 'id' );
    }
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}


