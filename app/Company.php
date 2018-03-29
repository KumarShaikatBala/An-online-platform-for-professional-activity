<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CompanyController;

class Company extends Model
{
    protected $fillable = [
        'employe_id','company_img', 'company_name', 'company_heading',
        'company_description',
        'location', 'employer_number','company_website', 'company_foundation',
        'company_mobile','company_email', 'company_cover_img', 'facebook',
        'google_plus', 'dribbble', 'pinterest',
        'twitter', 'github', 'instagram',
        'youtube', 'company_details',
    ];
    public function employe()
    {
        return $this->belongsTo('App\employer');
    }

    public function job()
    {
        return $this->hasMany('App\Job','company_id');
    }
}
