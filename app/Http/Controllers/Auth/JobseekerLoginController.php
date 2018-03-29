<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobseekerLoginController extends Controller
{
    public function LoginForm()
    {
        return view('jobseeker.login');
    }


    public function login(Request $request)
    {

        if(Auth::guard('jobseeker')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('resume-form')->with('msg','Successfully Log In !');
        }else{
            return redirect()->back()->with('email')->with('msg','wrong Email or Password !');
        }
    }
    public function logout()
    {
        Auth::guard('jobseeker')->logout();
        return redirect('/')->with('msg','Successfully Log Out !');
    }
}
