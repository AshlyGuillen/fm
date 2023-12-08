@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar Area de Trabajo</h1>

<div class="row">
<div class="col">

<form action="/cargo/{{$cargo->id}}" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
  <label for="" class="form-label">Cargo</label>
  <input type="text" class="form-control" id="cargo" value="{{$cargo->nomcargo}}" name="cargo">
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