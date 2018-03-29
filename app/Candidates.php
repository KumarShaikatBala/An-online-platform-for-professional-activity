<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable = [
        'job_id','employe_id','jobseeker','jobseeker_id'
    ];
}
