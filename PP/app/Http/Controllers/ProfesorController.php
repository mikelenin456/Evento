<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function show(){
        $profesor = Profesor::all();
        return view("profesor.ver")->with("profesores", $profesor);
    }
    public function crear(){
        return view("profesorCrear");
    }
    public function guardar(Request $request){
            $validate = $request->validate([
                'dni'=> 'required|max:8|,profesors,dni',
                'nombres'=>'required',
                'apellidos'=> 'required'
            ]);
            Profesor::create($request->all());
            return view ("profesorCrear");
    }

    
    public function edit(){
        return view("profesorModificar");
    
    }
}