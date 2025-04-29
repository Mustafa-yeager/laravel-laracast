<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class RegisterUserController extends Controller
{

    public function create(){
        return view('auth.register');
    }

    public function store()
    {
      $validatedAttributes = request()->validate(
            [
                'first_name'=>['required'],
                'last_name'=>['required'],
                'email'=>['required','email','max:254'],
                'password' => ['required', \Illuminate\Validation\Rules\Password::min(6),'confirmed'],
                ]
        );

        //dd($validatedAttributes);

      $user =  User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/job_list')->with('Success','Account Created Successfully!');

    }

}
