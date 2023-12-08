@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar Area de Trabajo</h1>

<div class="row">
<div class="col">

<form action="/proveedor/{{$proveedor->id}}" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$proveedor->nomproveedor}}" name="nombre">
</div>



<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono" value="{{$proveedor->telefono}}" name="telefono">
</div>

<div class="mb-3">
  <label for="" class="form-label">Correo</label>
  <input type="text" class="form-control" id="correo" value="{{$proveedor->correo}}" name="correo">
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