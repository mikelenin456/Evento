@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eventos</h1>

    @if (count($eventos) > 0)
        <ul class="list-group">
            @foreach ($eventos as $evento)
                <li class="list-group-item">
                    <h5>{{ $evento->titulo }}</h5>
                    <p>{{ $evento->descripcion }}</p>
                    <small>Fecha: {{ $evento->fecha }}</small>
                    <a href="{{ route('inscribirse', $evento->id) }}" 
                    class="btn btn-success">Inscribirme</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay eventos disponibles.</p>
        
    @endif
</div>

@endsection
