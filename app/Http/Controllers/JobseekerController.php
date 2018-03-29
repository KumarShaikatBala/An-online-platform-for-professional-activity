<?php

namespace App\Http\Controllers;

use App\jobseeker;
use Illuminate\Http\Request;
use function view;

class JobseekerController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        return view('jobseeker.register');
    }


    public function store(Request $request)
    {
        if($request->password_confirmation==$request->password){
            if( jobseeker::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ])){
         return redirect('job_seeker-login-form')->with('msg','Successfully Registration Now Log In with your email and Password!');
            }
        }
        return redirect('job_seeker-register');

    }


    public function show(jobseeker $jobseeker)
    {
        //
    }


    public function edit(jobseeker $jobseeker)
    {
        //
    }


    public function update(Request $request, jobseeker $jobseeker)
    {
        //
    }

    public function destroy(jobseeker $jobseeker)
    {
        //
    }
}
