<?php

namespace App\Http\Controllers;

use App\employer;
use Illuminate\Http\Request;
use function view;

class EmployerController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        return view('employer.register');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if($request->password_confirmation==$request->password){
            if( employer::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ])){
            return redirect('employer-login-form')->with('msg','Successfully Registration Now Log In with Your Email and password !');
            }
        }
        return redirect('employer-register')->with('msg','wrong Email or Password!');

    }


    public function show(employer $employer)
    {
        //
    }


    public function edit(employer $employer)
    {
        //
    }


    public function update(Request $request, employer $employer)
    {
        //
    }


    public function destroy(employer $employer)
    {
        //
    }
}
