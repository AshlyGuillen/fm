@extends('layouts.cuerpo')

@section('hijos')



<h1>Devolucion de medicamento</h1>

<a href="/devolucion/create"class="btn btn-success">Agregar un devolucion</a> &nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>



<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Medicamento</th>
        <th>Cantidad</th>
        
        
    </tr>

</thead>

<tbody>

@foreach($devolucion as $devolucion)


<tr>
    <th>{{$devolucion->id}}</th>
    <th>{{$devolucion->fecha}}</th>
    <th>{{$devolucion->idmedicamento}}</th>
    <th>{{$devolucion->cantidad}}</th>
    
    <th>
       


        <form action="/devolucion/{{{$devolucion->id}}}" method="POST"> 
        @csrf
            @Method('DELETE')
           

       
            <a href="/devolucion/{{$devolucion->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar</button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>
@endsection