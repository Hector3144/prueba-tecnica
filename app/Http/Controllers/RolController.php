<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RolController extends Controller
{

        public function index(){
            $users = user::all();
            return view('adminis.admin')->with(compact('users'));
        }
        public function show (){
            $users = user::all();
            return view('adminis.admin')->with(compact('users'));
        }
        public function showdos ($id){
            $user = User::find($id);
            return view('adminis.show', ['user'=>$user]);
        }
        public function update (Request $request, $id){
            $user = user::find($id);
            request()->validate([
                'role'=> 'required',
            ]);
            $user->role_id = $request->role;
            $user -> save ();

            return redirect()->route('admin.index')->with('success', 'Tarea Actualizada');

        }
}
