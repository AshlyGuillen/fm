@extends('layouts.cuerpo')
@section('hijos')
<h1>ENTRADA O EXISTENCIA</h1>
<a href="/existencia/create" class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class='table table-striped table-hover'>
    <thead>
    <tr>
        <th>ID EXISTENCIA</th>
        <th>ID DETALLE EXISTENCIA</th>
        <th>TOTAL PROD ENTRANTE</th>
        <th>FECHA ENTRADA</th>
        <th>ID PROVEEDOR</th>
        <th>PROCESOS</th>
    </tr>
    </thead>

    <tbody>
        @foreach($existencia as $existencias)
        <tr>
        <th>{{$existencias->id}}</th>
        <th>{{$existencias->iddexistencia}}</th>
        <th>{{$existencias->total}}</th>
        <th>{{$existencias->fecha}}</th>
        <th>{{$existencias->idproveedor}}</th>
        <th>
        <form action="/existencia/{{{$existencias->id}}}" method="POST">
            @csrf
            @method('DELETE')
        <a href="/existencia/{{$existencias->id}}/edit" class="btn btn-info">Editar</a>&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">Borrar-Cliente</button>
        </form>
        </th>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection