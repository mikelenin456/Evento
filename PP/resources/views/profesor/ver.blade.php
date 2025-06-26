@extends('layouts.general')

@section('titulo')
    Lista de Profesores
@endsection

@section('cuerpo')
<h1>Lista de Profesores</h1>
<table class="table table-striped mt-4">
    <tr>
        <th>DNI</th>
        <th>Nombres</th>
        <th>Apellidos</th>
    </tr>
    @foreach($profesores as $profesor)
    <tr>
        <td>{{$profesor["dni"]}}</td>
        <td>{{$profesor["nombres"]}}</td>
        <td>{{$profesor["apellidos"]}}</td>
    </tr>
    @endforeach
</table>
@endsection