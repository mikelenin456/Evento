@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Evento</h1>

    <form action="{{ route('admin.eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $evento->titulo }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $evento->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="datetime-local" name="fecha" id="fecha" value="{{ \Carbon\Carbon::parse($evento->fecha)->format('Y-m-d\TH:i') }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Evento</button>
    </form>
</div>
@endsection