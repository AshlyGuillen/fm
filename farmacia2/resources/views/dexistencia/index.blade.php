@extends('layouts.cuerpo')
@section('hijos')
<h1>DETALLE DE EXISTENCIA</h1>
<a href="/dexistencia/create" class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class='table table-striped table-hover'>
    <thead>
    <tr>
        <th>NUMERO DE DETALLE EXISTENCIA</th>
        <th>CANTIDAD EXISTENTE</th>
        <th>PRECIO UNITARIO</th>
        <th>NRO MEDICAMENTO</th>
        <th>FECHA DE VENCIMIENTO</th>
        <th>ESTADO</th>
        <th>PROCESOS</th>
    </tr>
    </thead>

    <tbody>
        @foreach($dexistencia as $dexistencias)
        <tr>
        <th>{{$dexistencias->id}}</th>
        <th>{{$dexistencias->cantidad}}</th>
        <th>{{$dexistencias->precio}}</th>
        <th>{{$dexistencias->idmedicamento}}</th>
        <th>{{$dexistencias->fechavencimiento}}</th>
        <th>{{$dexistencias->estado}}</th>
        <th>
        <form action="/dexistencia/{{{$dexistencias->id}}}" method="POST">
            @csrf
            @method('DELETE')
        <a href="/dexistencia/{{$dexistencias->id}}/edit" class="btn btn-info">Editar</a>&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">Borrar-Cliente</button>
        </form>
        </th>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection