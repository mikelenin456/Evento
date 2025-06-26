@extends('layouts.general')

@section('cuerpo')
<h1>Modificar Profesor</h1>
<form method="post" action="/profesor/actualizar">
    @csrf
    <input class="form-control" type="text" name="id" placeholder="ingrese id"/><br>
    <input class="form-control" type="text" name="apellidos" placeholder="ingrese apellidos"/><br>
    <input class="btn btn-primary" type="submit" value="modificar"/>
<form>
@endsection