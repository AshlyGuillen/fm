@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar cliente</h1>

<div class="row">
<div class="col">

<form action="/cliente/{{$cliente->id}}" class="form-control" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$cliente->nomcliente}}" name="nombre">
</div>

<div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input type="text" class="form-control" id="direccion" value="{{$cliente->direccion}}" name="direccion">
</div>

<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono" value="{{$cliente->telefono}}" name="telefono">
</div>

<div class="mb-3">
  <label for="" class="form-label">Correo</label>
  <input type="text" class="form-control" id="correo" value="{{$cliente->correo}}" name="correo">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/cliente" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection