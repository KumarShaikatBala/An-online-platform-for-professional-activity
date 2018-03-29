<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jobseeker;

class Resume extends Model
{
    protected $fillable = [
        'jobseeker_id','img', 'name','short_description','location',
        'website', 'salary','age','mobile',
        'email', 'tag','facebook','google_plus',
        'dribble', 'pinterest', 'twitter','github',
        'instagram', 'youtube'
    ];

    public function jobseeker(){
        return $this->belongsTo('App\jobseeker');
    }
}
