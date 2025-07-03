<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('usuario.Eventos', compact('eventos'));
    }

    public function adminIndex()
    {   
        // eventos para admin
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
    public function edit($id)
{
    $evento = Evento::findOrFail($id);
    return view('admin.eventos.edit', compact('evento'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'fecha' => 'required|date',
    ]);

    $evento = Evento::findOrFail($id);
    $evento->update([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'fecha' => $request->fecha,
    ]);

    return redirect()->route('admin.eventos.index')->with('success', 'Evento actualizado correctamente');
}


}
