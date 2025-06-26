<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mostrar(){
        if(Auth::check()){
            return view('usuario.mostrar');
        }else{
            return redirect('login');
        }
    }

    public function actualizar(){
        return view('usuario.actualizar');
    }
}
