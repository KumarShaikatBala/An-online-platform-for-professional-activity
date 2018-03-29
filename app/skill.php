<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jobseeker;

class skill extends Model
{


    protected $fillable = [
        'jobseeker_id','skill_name','skill_percent'
    ];
    public function jobseeker(){
        return $this->belongsTo('App\jobseeker');
    }

}
