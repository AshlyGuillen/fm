@extends('layouts.cuerpo')

@section('hijos')


<h1>Editar Empleado</h1>

<div class="row">
<div class="col">

<form action="/empleado/{{$empleado->id}}"  method="POST">
@csrf
@method('PUT')


<div class="mb-3">
  <label for="" >Nombre</label>
  <input type="text" class="form-control" id="nombre" value="{{$empleado->nomempleado}}" name="nombre">
</div>



<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="telefono" value="{{$empleado->telefono}}" name="telefono">
</div>

<div class="mb-3">
        <label for="idcargo" class="form-label">Cargos</label>
        <select class="form-control" id="idcargo" name="idcargo">
          <option value="">Seleccione Un Cargo</option>
          @foreach ($cargo as $cargo)
            <option value="{{ $cargo->id }}" {{$empleado->idcargo == $cargo->id ? 'selected' : ''}}>
              {{ $cargo->nomcargo }}
            </option>
          @endforeach
        </select>
        <a href="/cargo/create"class="btn btn-success">Agregar</a>
      </div>







<div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/empleado" class="btn btn-danger">Cancelar</a>
</div>


</form>

</div>

</div>

@endsection