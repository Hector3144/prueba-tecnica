<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){


        return view('auth.login');
    }

    public function regis() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña estan incorrectos, porfavor intenta de nuevo',
            ]);
    }else{
        if(auth()->user()->role=='admin'){
        return redirect()->route('aminist.index');
    }else {
        return redirect() ->to('/');
    }
}

}
public function destroy(){
    auth()->logout();
    return redirect() ->to('/');
}
}

