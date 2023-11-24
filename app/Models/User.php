<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'fname',
        'lname',
        'pw',
        'dob',
        'phone',
        'email',
        'user_status'
    ];
}
