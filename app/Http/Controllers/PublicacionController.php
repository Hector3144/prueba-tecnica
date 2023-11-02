<?php

namespace App\Http\Controllers;
use App\Models\Publi;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
public function create(){


    return view('publicaciones.publicaciones');
}
public function poste(Request $request){
    $request-> validate([
            'title' => 'required',
            'desc' => 'required|max:255',
            'date' => 'required',
    ]);

    $publi = new publi;
    $publi -> title = $request->title;
    $publi -> desc = $request->desc;
    $publi -> date = $request->date;
    $publi -> save ();

    return redirect()->route('publi.index')->with('success', 'Tarea Creada Satisfactorimente');
    }
}
