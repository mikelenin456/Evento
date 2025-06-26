<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function reconocer(int $id){
        return match($id){
            1 => "algo",
            2 => "alguno",
            3 => "alguien",
            default => "ingresar un identificacdor"
        };
    }
}
