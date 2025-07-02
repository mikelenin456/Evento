@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Eventos - Administrador</h1>
    <a href="{{ route('admin.eventos.create') }}" class="btn btn-primary mb-3">Agregar Evento</a>
<!--TODO:
gestión de personal
gestión de usuarios
Boton editar-->
    {{-- Mostrar lista de eventos --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($eventos->count())
        <ul class="list-group">
            @foreach($eventos as $evento)
                <li class="list-group-item">
                    <strong>{{ $evento->titulo }}</strong> — {{ $evento->descripcion }} ({{ $evento->fecha }})
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay eventos registrados.</p>
    @endif
</div>
@endsection