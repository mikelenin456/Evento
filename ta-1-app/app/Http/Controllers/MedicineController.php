<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MedicineController extends Controller
{
    public function poco_stock(): string {
        return "tiene poco stock";
    }

    public function index(string $message):view {
        return view(view: "medicinas.index", data: compact(var_name: 'message'));
    }

    public function create ():view {
        return view(view: 'medicina.create');
    }

    public function store(request: $request) {
        return redirect()->route('medicina.index')->with('succes','medicamento_gradado');
    } 
}

