@extends('layouts.cuerpo')

@section('hijos')



<h1>Lista de Empleado</h1>

<a href="/empleado/create"class="btn btn-success">Crear</a>&nbsp;
<a href="/factura/create" class="btn btn-danger">Crear Factura&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Empleado</th>
        <th>Telefono</th>
        <th>ID_Cargo</th>
        
        
    </tr>

</thead>

<tbody>

@foreach($empleado as $empleado)

<tr>
    <th>{{$empleado->id}}</th>
    <th>{{$empleado->nomempleado}}</th>
    <th>{{$empleado->telefono}}</th>
    <th>{{$empleado->idcargo}}</th>
    
    <th>
       


        <form action="/empleado/{{{$empleado->id}}}" method="POST"> 
           

       
            <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar</button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>
@endsection