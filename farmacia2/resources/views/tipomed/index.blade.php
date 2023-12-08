@extends('layouts.cuerpo')
@section('hijos')
<h1>LISTA DE MEDICAMENTOS</h1>
<a href="/tipomed/create" class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class='table table-striped table-hover'>
    <thead>
    <tr>
        <th>ID</th>
        <th>TIPO DE MEDICAMENTO</th>
        <th>DETALLE DEL TIPO DE MEDICAMENTO</th>
        <th>PROCESOS</th>
    </tr>
    </thead>

    <tbody>
        @foreach($tipomed as $tipomeds)
        <tr>
        <th>{{$tipomeds->id}}</th>
        <th>{{$tipomeds->tipo}}</th>
        <th>{{$tipomeds->detalle}}</th>
        <th>
        <form action="/tipomed/{{{$tipomeds->id}}}" method="POST">
            @csrf
            @method('DELETE')
        <a href="/tipomed/{{$tipomeds->id}}/edit" class="btn btn-info">Editar</a>&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">Borrar-Cliente</button>
        </form>
        </th>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection