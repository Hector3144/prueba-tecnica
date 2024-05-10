<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Add this import statement

class RegisterController extends Controller
{
    public $pass;

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
        $user = new User();
        $user->name = request('name');
        $user->age = request('age');
        $user->email = request('email');
        $user->password = request('password'); // Use Hash::make() to encrypt the password
        $user->role_id = 3; // Set the role_id value explicitly
        $user->view_id = 1; // Set the view_id value explicitly

        $user->save();

        auth()->login($user);
        return redirect()->to('/');
    }
}
