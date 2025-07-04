@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Inscripciones</h1>

    @if(count($inscripciones) > 0)
        <ul class="list-group">
            @foreach($inscripciones as $inscripcion)
                <li class="list-group-item">
                    <h5>{{ $inscripcion->evento->titulo }}</h5>
                    <p>{{ $inscripcion->evento->descripcion }}</p>
                    <small>Fecha: {{ $inscripcion->evento->fecha }}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>No tienes eventos inscritos.</p>
    @endif
</div>
@endsection
