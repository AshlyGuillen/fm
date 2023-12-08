@extends('layouts.cuerpo')

@section('hijos')


<h1>AGREGAR DETALLE FACTURA</h1>

<div class="row">
<div class="col">

<form action="/detalle/{{$detalle->id}}"  method="POST">
@csrf

<div class="mb-3">
  <label for="" >Codigo</label>
  <input type="text" class="form-control" id="codigo"  name="codigo" value="{{$detalle->id}}">
</div>

<div class="mb-3">
  <label for="" >Numero de venta</label>
  <input type="text" class="form-control" id="numventa"  name="numventa" value="{{$detalle->numventa}}">
</div>

@method('PUT')
<div class="mb-3">
        <label for="idcargo" class="form-label">Medicamento</label>
        <select class="form-control" id="idmedicamento" name="idmedicamento">
          <option value="">Seleccione Un Medicamento</option>
          @foreach ($medicamento as $medicamento)
            <option value="{{ $medicamento->id }}" {{$detalle->idmedicamento == $medicamento->id ? 'selected' : ''}}>
              {{ $medicamento->nombre }}
            </option>
          @endforeach
        </select>
        <a href="/medicamento/create"class="btn btn-success">Agregar</a>
      </div>



<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input type="text" class="form-control" id="cantidad"  name="cantidad" value="{{$detalle->cantidad}}">
</div>

<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input type="text" class="form-control" id="precio"  name="precio" value="{{$detalle->precio}}">
</div>







<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/detalle" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection