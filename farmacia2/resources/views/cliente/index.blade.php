@extends('layouts.cuerpo')

@section('hijos')
<h1>Lista de clientes</h1>


<a href="cliente/create"class="btn btn-success">Crear</a>&nbsp;
<a href="/factura/create" class="btn btn-danger">Crear Factura</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
    </tr>

</thead>

<tbody>

@foreach($cliente as $cliente)
<tr>
    <th>{{$cliente->id}}</th>
    <th>{{$cliente->nomcliente}}</th>
    <th>{{$cliente->direccion}}</th>
    <th>{{$cliente->telefono}}</th>
    <th>{{$cliente->correo}}</th>
    <th>
       


        <form action="/cliente/{{{$cliente->id}}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/cliente/{{$cliente->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar </button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>

@endsection
