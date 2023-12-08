@extends('layouts.cuerpo')
@section('hijos')
<h1>AGREGAR METODO DE PAGO</h1>
    <div class="row">
    <div class="col">
    <form action="/pago" method="POST">
    @csrf
        <div class="mb-3">
        <label for="">FORMA DE PAGO:</label>
        <input type="text" name="formapago" id="formapago" class="form-control" placeholder="Efectivo">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">DESCRIPCION:</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Dinero en fisico">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/pago" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
    </div>
    </div>
@endsection