<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class employer extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public  function job()
    {
return $this->hasMany('App\Job','employe_id');
    }
}
