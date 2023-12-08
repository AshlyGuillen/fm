@extends('layouts.cuerpo')

@section('hijos')


<h1>Crear Cliente</h1>

<div class="row">
<div class="col">

<form action="/cliente" method="POST">
@csrf


<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre"  name="nombre">
</div>

<div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input type="text" class="form-control" id="direccion"  name="direccion">
</div>

<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono"  name="telefono">
</div>

<div class="mb-3">
  <label for="" class="form-label">Crreo</label>
  <input type="text" class="form-control" id="correo"  name="correo">
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