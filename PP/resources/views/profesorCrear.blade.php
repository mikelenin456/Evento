@extends('layouts.general')

@section('cuerpo')
<h1>Insertar Profesor</h1>
<form class="mt-4" method="post" action="/profesor/guardar">
    @csrf
        class="form-control"
        type="text"
        name="dni"
        placeholder="Ingrese DNI"
        value="{{ old('dni') }}"
        @error('dni')style="border-color:red"@enderror
    <input class="form-control" type="text" name="dni" placeholder="Ingrese DNI" value="{{ old('dni') }}" /><br>
    @error('dni')<div class="text-danger">{{ $message }} </div>@enderror<br>
    <input class="form-control" type="text" name="nombres" placeholder="Ingrese Nombres" value="{{ old('nombres') }}" /><br> 
    <input class="form-control" type="text" name="apellidos" placeholder="Ingrese Apellidos" value="{{ old('apellidos') }}" /><br>
    <input class="btn btn-primary" type="submit" value="guardar" /><br>
<form>
<br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <url>
            @foreach ($errors->all() as $error)
                <li>{{  $error }}</li>
            @endforeach
        </url>
    </div>    
    @endif
@endsection