@extends('layouts.cuerpo')

@section('hijos')



<h1>Factura</h1>

<a href="/factura/create"class="btn btn-success">Agregar</a>&nbsp;<a href="{{ route('ruta') }}" class="btn btn-primary">Regresar a la Ruta</a>



<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>ID FACTURA</th>
        <th>NUMERO DE VENTA</th>
        <th>FECHA VENTA</th>
        <th>ID CLIENTE</th>
        <th>ID EMPLEADO</th>
        <th>ID FORMA PAGO</th>
        <th>ESTADO DE VENTA</th>
        <th>TOTAL A PAGAR</th>
    </tr>
</thead>
<tbody>
@foreach($factura as $facturas)
<tr>
    <th>{{$facturas->id}}</th>
    <th>{{$facturas->numventa}}</th>
    <th>{{$facturas->fecha}}</th>
    <th>{{$facturas->idcliente}}</th>
    <th>{{$facturas->idempleado}}</th>
    <th>{{$facturas->estado}}</th>
    <th>{{$facturas->total}}</th>
    <th>
        <form action="/factura/{{{$facturas->id}}}" method="POST"> 
        @csrf
            @Method('DELETE')
            <a href="/factura/{{$facturas->id}}/edit" class="btn btn-primary">Editar</a>
        <button type="submit"class="btn btn-warning">Borrar</button>
        </form>
    </th>
</tr>
@endforeach
</tbody>
</table>
@endsection