@extends('layouts.cuerpo')

@section('hijos')
<h1>Lista de cargo</h1>


<a href="/cargo/create"class="btn btn-success">Crear</a>&nbsp;<a href="/empleado"class="btn btn-primary">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Cargo</th>
        
    </tr>

</thead>

<tbody>

@foreach($cargo as $cargo)
<tr>
    <th>{{$cargo->id}}</th>
    <th>{{$cargo->nomcargo}}</th>
    <th>
       


        <form action="/cargo/{{{$cargo->id}}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/cargo/{{{$cargo->id}}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar </button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>

@endsection


