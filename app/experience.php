<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jobseeker;

class experience extends Model
{
    protected $fillable = [
        'jobseeker_id','company_name', 'position','work_from',
        'work_to', 'work_description'
    ];
    public function jobseeker(){
        return $this->belongsTo('App\jobseeker');
    }
}
