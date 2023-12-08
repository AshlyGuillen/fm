@extends('layouts.cuerpo')

@section('hijos')


<h1>Agregar devolucion de medicamento</h1>

<div class="row">
<div class="col">

<form action="/devolucion"  method="POST">
@csrf

<div class="mb-3">
  <label for="" >FECHA DEVOLUCION</label>
  <input type="date" class="form-control" id="fecha"  name="fecha" placeholder="Ingrese una fecha">
</div>




<div class="mb-3">
  <label for="" class="form-label">MEDICAMENTO</label>
  <select class="form-control" id="idmedicamento" name="idmedicamento">
                      <option value="">Seleccione un Medicamento</option>
                      @foreach ($medicamento as $medicamento)
                      <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
                      @endforeach
                    </select>
<a href="/medicamento/create"class="btn btn-success">Agregar</a>
</div>

<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input type="text" class="form-control" id="cantidad"  name="cantidad" placeholder="Ingrese una cantidad">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/devolucion" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection