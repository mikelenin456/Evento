<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mostrar(){
        if(Auth::check() && Auth::user()->rol === 'usuario'){
            return view('usuario.eventos');
        }else{
            abort('403');
        }
    }

    public function actualizar(){
        return view('usuario.inscripciones');
    }
}
