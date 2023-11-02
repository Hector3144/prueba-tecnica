<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){

        return view('auth.register');
    }

    public function regis(){
        $this->validate(request(), [
            'name' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        
        $users= User::create(request(['name', 'age', 'email', 'password']));

        auth()-> login($users);
        return redirect() ->to ('/');
    }
}
