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

        
        $user= User::create(request(['name','rol', 'age', 'email', 'password']));
        $user->role= 'user';
        $user->save();

        

        auth()-> login($user);
        return redirect() ->to ('/');
    }
}
