@extends('layouts.cuerpo')
@section('hijos')

<h1>LISTA DE MEDICAMENTOS</h1>
<a href="/medicamento/create" class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class='table table-striped table-hover'>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre del Medicamento</th>
        <th>Tipo Medicamento</th>
        <th>En Stock</th>
        <th>Descripcion</th>
        <th>Procesos</th>
    </tr>
    </thead>

    <tbody>
        @foreach($medicamento as $medicamentos)
        <tr>
        <th>{{$medicamentos->id}}</th>
        <th>{{$medicamentos->nombre}}</th>
        <th>{{$medicamentos->idtipo}}</th>
        <th>{{$medicamentos->stock}}</th>
        <th>{{$medicamentos->descripcion_producto}}</th>
        <th>
        <form action="/medicamento/{{{$medicamentos->id}}}" method="POST">
            @csrf
            @method('DELETE')
        <a href="/medicamento/{{$medicamentos->id}}/edit" class="btn btn-info">Editar</a>&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">Borrar-Cliente</button>
        </form>
        </th>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection