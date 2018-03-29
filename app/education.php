<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jobseeker;

class education extends Model
{
    protected $fillable = [
        'jobseeker_id','education_img','degree',
        'subject', 'institute', 'date_from','date_to',
        'education_description'
    ];
    public function jobseeker(){
        return $this->belongsTo('App\jobseeker');
    }
}
