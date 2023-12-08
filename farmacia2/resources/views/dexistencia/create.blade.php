@extends('layouts.cuerpo')
@section('hijos')
<h1>AGREGAR DETALLE DE EXISTENCIA</h1>
    <div class="row">
    <div class="col">
    <form action="/dexistencia" method="POST">
    @csrf
        <div class="mb-3">
        <label for="" class="form-label">CANTIDAD EXISTENTE:</label>
        <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="110">
        </div>

        <div class="mb-3">
        <label for="" class="form-label">PRECIO UNITARIO:</label>
        <input type="text" name="precio" id="precio"  class="form-control" placeholder="90">
        </div>

        <div class="mb-3">
        <label for="" class="form-label">Medicamento</label>
        <select class="form-control" id="idmedicamento" name="idmedicamento">
        <option value="">SELECCIONE UN MEDICAMENTO:</option>
            @foreach ($medicamento as $medicamento)
            <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
            @endforeach
        </select>
        <a href="/medicamento/create"class="btn btn-success">Agregar</a>
        </div>

        <div class="mb-3">
        <label for="" class="form-label">FECHA DE VENCIMIENTO:</label>
        <input type="date" name="fechavencimiento" id="fechavencimiento" class="form-control">
        </div>

        <div class="mb-3">
        <label for="" class="form-label">ESTADO DEL PRODUCTO:</label>
        <input type="text" name="estado" id="estado" class="form-control" placeholder="Bueno o Malo">
        </div>
            <br>      
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/tipomed" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
    </div>
    </div>
@endsection