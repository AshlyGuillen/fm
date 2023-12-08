@extends('layouts.cuerpo')

@section('hijos')



<h1>Cambio de medicamento</h1>

<a href="/cambio/create"class="btn btn-success">Agregar un cambio</a> &nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>



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

@foreach($cambio as $cambio)


<tr>
    <th>{{$cambio->id}}</th>
    <th>{{$cambio->fecha}}</th>
    <th>{{$cambio->idmedicamento}}</th>
    <th>{{$cambio->cantidad}}</th>
    
    <th>
       


        <form action="/cambio/{{{$cambio->id}}}" method="POST"> 
        @csrf
            @Method('DELETE')
           

       
            <a href="/cambio/{{$cambio->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar</button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>
@endsection