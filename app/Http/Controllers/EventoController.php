<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('usuario.eventos.index', compact('eventos'));
    }

    public function adminIndex()
    {   
        // Aquí retornas una vista con eventos para admin
        $eventos= Evento::all();
        return view('admin.eventos.index', compact('eventos')) ;
    }

    public function create(){
        return view('admin.eventos.create'); //vista formulario
    }

    public function store(Request $request)
    {
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'fecha' => 'required|date',
    ]);

    Evento::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'fecha' => $request->fecha,
    ]);

    return redirect()->route('admin.eventos.index')->with('success', 'Evento creado correctamente');
}

}
