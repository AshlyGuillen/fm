@extends('layouts.cuerpo')

@section('hijos')
<h1>Lista de clientes</h1>


<a href="/proveedor/create"class="btn btn-success">Crear</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
    </tr>

</thead>

<tbody>

@foreach($proveedor as $proveedor)
<tr>
    <th>{{$proveedor->id}}</th>
    <th>{{$proveedor->nomproveedor}}</th>
    <th>{{$proveedor->telefono}}</th>
    <th>{{$proveedor->correo}}</th>
    <th>
       


        <form action="/proveedor/{{{$proveedor->id}}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/proveedor/{{$proveedor->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar </button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>

@endsection
