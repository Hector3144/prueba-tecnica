<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministController extends Controller
{
   public function administ(){
      return redirect() ->to ('/');
   }

}
