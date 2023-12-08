@extends('layouts.cuerpo')
@section('hijos')

<h1>LISTA DE FORMA DE PAGOS</h1>
<a href="/pago/create" class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class='table table-striped table-hover'>
    <thead>
    <tr>
        <th>ID FORMA PAGO</th>
        <th>FORMA DE PAGO</th>
        <th>DESCRIPCION</th>
        <th>PROCESOS</th>
    </tr>
    </thead>

    <tbody>
        @foreach($pago as $pagos)
        <tr>
        <th>{{$pagos->id}}</th>
        <th>{{$pagos->formapago}}</th>
        <th>{{$pagos->descripcion}}</th>
        <th>
        <form action="/pago/{{{$pagos->id}}}" method="POST">
            @csrf
            @method('DELETE')
        <a href="/pago/{{$pagos->id}}/edit" class="btn btn-info">Editar</a>&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger">Borrar-Cliente</button>
        </form>
        </th>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection