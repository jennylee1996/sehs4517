<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'type_id',
        'acty_name',
        'acty_desc',
        'acty_start_date',
        'acty_end_date',
        'capacity',
        'acty_status'
    ];

    public function activityTypes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\ActivityTypes', 'type_id', 'id');
    }

    public function enrolledActivities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\EnrolledActivities', 'activity_id', 'id');
    }
}
