@extends('layouts.cuerpo')

@section('hijos')



<h1>DETALLE DE FACTURAS</h1>

<a href="/detalle/create"class="btn btn-success">Crear Detalle Factura</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>



<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID</th>
        <th>Numero de venta</th>
        <th>Medicamento</th>
        <th>Cantidad</th>
        <th>Precio</th>
        
        
    </tr>

</thead>

<tbody>

@foreach($detalle as $detalle)


<tr>
    <th>{{$detalle->id}}</th>
    <th>{{$detalle->numventa}}</th>
    <th>{{$detalle->idmedicamento}}</th>
    <th>{{$detalle->cantidad}}</th>
    <th>{{$detalle->precio}}</th>
    
    <th>
       


        <form action="/detalle/{{{$detalle->id}}}" method="POST"> 
        @csrf
            @Method('DELETE')
           

       
            <a href="/detalle/{{$detalle->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar</button>
        </form>
    </th>
</tr>

@endforeach
</tbody>

</table>
@endsection