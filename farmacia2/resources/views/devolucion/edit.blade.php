@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar devolucion de medicamento</h1>

<div class="row">
<div class="col">

<form action="/devolucion/{{$devolucion->id}}"  method="POST">
@csrf

<div class="mb-3">
  <label for="" >Codigo</label>
  <input type="text" class="form-control" id="codigo"  name="codigo" value="{{$devolucion->id}}" readonly>
</div>

<div class="mb-3">
  <label for="" >Fecha</label>
  <input type="date" class="form-control" id="fecha"  name="fecha" value="{{$devolucion->fecha}}">
</div>

<div class="mb-3">
        <label for="idcargo" class="form-label">Medicamento</label>
        <select class="form-control" id="idmedicamento" name="idmedicamento">
          <option value="">Seleccione Un Medicamento</option>
          @foreach ($medicamento as $medicamento)
            <option value="{{ $medicamento->id }}" {{$devolucion->idmedicamento == $medicamento->id ? 'selected' : ''}}>
              {{ $medicamento->nombre }}
            </option>
          @endforeach
        </select>
        <a href="/medicamento/create"class="btn btn-success">Agregar</a>
      </div>




<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input type="text" class="form-control" id="cantidad"  name="cantidad" value="{{$devolucion->cantidad}}">
</div>
@method('PUT')

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/devolucion" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection