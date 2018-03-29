<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'employe_id','company_id','tittle','company','short_description','url','location','type',
        'salary','hours','experience','degree','img','description'
    ];
    public function employe()
    {
        return $this->belongsTo('App\employer');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
