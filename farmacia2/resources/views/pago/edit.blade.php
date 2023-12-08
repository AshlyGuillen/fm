@extends('layouts.cuerpo')
@section('hijos')
        <div class="row">
            <div class="col">
            <form action="/pago/{{$editar->id}}" method="POST">
                @csrf
                @method('PUT')
            <h1>EDITAR FORMA DE PAGO</h1>
                <div class="mb-3">
                    <label for="" class="form-label">ID FORMA PAGO:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$editar->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">FORMA DE PAGO:</label>
                    <input type="text" class="form-control" id="formapago" name="formapago" value="{{$editar->formapago}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">DESCRIPCION:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$editar->descripcion}}">
                </div>
                <div class="mb-3">
                <form action="/pago" method="PUT">
                        <button type="submit" class="btn btn-info">GUARDAR</button>
                        <a href="/pago" class="btn btn-danger">CANCELAR</a>
                    </form>
                    </div>
            </div>
        </div>
@endsection