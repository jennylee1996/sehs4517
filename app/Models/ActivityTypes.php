<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityTypes extends Model
{
    protected $table = 'activity_types';

    public function activities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Activities', 'type_id', 'id');
    }
}
