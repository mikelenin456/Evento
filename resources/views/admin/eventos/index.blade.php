@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Eventos - Administrador</h1>

    <a href="{{ route('admin.eventos.create') }}" class="btn btn-primary mb-3">Agregar Evento</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($eventos->count())
        @foreach ($eventos as $evento)
            <div class="card mb-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $evento->titulo }}</strong> — {{ $evento->descripcion }} ({{ $evento->fecha }})
                    </div>
                    <div>
                        <!-- Botón Gestión de Personal (ejemplo) -->
                        <a href="#" class="btn btn-secondary btn-sm">Gestión de Personal</a>
                        
                        <!-- Botón Gestión de Usuarios (ejemplo) -->
                        <a href="{{ route('admin.eventos.inscritos', $evento->id) }}" class="btn btn-info">Gestión de Usuarios</a>

                        
                        <!-- Botón Editar -->
                        <a href="{{ route('admin.eventos.edit', $evento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        
                        <!-- Botón Eliminar -->
                        <form action="{{ route('admin.eventos.destroy', $evento->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este evento?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay eventos registrados.</p>
    @endif
</div>
@endsection