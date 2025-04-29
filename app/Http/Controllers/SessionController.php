<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
       $attributed =  request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

       if(! Auth::attempt($attributed)) {
        throw ValidationException::withMessages([
            'email'=>'Sorry, This Email Does not Match',
            'password'=>'Sorry, This Password Does not Match',
        ]);
       }

        request()->session()->regenerate();

        return redirect('/home')->with('success','Logged in successfully');

    }


    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
