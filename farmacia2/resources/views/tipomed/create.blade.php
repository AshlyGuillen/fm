@extends('layouts.cuerpo')
@section('hijos')
<h1>AGREGAR TIPO MEDICAMENTO</h1>
    <div class="row">
    <div class="col">
    <form action="/tipomed" method="POST">
    @csrf
        <div class="mb-3">
        <label for="" class="form-label">TIPO MEDICAMENTO:</label>
        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Analgesico">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">DETALLE DEL TIPO DE MEDICAMENTO:</label>
        <input type="text" name="detalle" id="detalle"  class="form-control" placeholder="Sirve para ...">
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