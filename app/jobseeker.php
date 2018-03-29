<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class jobseeker extends Authenticatable
{


    protected $fillable = [
        'name', 'email', 'password',
    ];
}
