@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios inscritos al evento: {{ $evento->titulo }}</h1>

    @if(count($inscripciones) > 0)
        <ul class="list-group">
            @foreach($inscripciones as $inscripcion)
                <li class="list-group-item">
                    {{ $inscripcion->usuario->name }} — {{ $inscripcion->usuario->email }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay usuarios inscritos en este evento.</p>
    @endif
</div>
@endsection
