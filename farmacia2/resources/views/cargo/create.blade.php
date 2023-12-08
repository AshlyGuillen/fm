@extends('layouts.cuerpo')

@section('hijos')


<h1>Ingresar area de trabajo nueva</h1>

<div class="row">
<div class="col">

<form action="/cargo" method="POST">
@csrf


<div class="mb-3">
  <label for="" class="form-label">Cargo</label>
  <input type="text" class="form-control" id="nombre" placeholder="Area de trabajo" name="nombre">
</div>


<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/cargo" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>



</form>


@endsection