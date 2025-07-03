<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Evento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function inscribirse($evento_id)
    {
        Inscripcion::create([
            'user_id' => Auth::id(),
            'evento_id' => $evento_id,
        ]);

        return redirect()->route('mis.inscripciones')->with('success', '¡Te has inscrito al evento!');

    }

    public function verUsuarios($evento_id)
    {
        $inscripciones = Inscripcion::where('evento_id', $evento_id)->with('usuario')->get();
        $evento = Evento::findOrFail($evento_id);

        return view('admin.inscritos', compact('inscripciones', 'evento'));
    }
    public function misInscripciones()
    {
    $userId = Auth::id();
    $inscripciones = Inscripcion::where('user_id', $userId)->with('evento')->get();

    return view('usuario.inscripciones', compact('inscripciones'));
    }

}
