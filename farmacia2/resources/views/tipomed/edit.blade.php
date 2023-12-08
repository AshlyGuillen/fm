@extends('layouts.cuerpo')
@section('hijos')
        <div class="row">
            <div class="col">
                <form action="/tipomed/{{$teditar->id}}" method="POST">
                @csrf
                @method('PUT')
                <h1>EDITAR TIPO MEDICAMENTO</h1>
                <div class="mb-3">
                    <label for="" class="form-label">ID TIPO MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$teditar->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">TIPO MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" value="{{$teditar->tipo}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">DETALLE DEL TIPO DE MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="detalle"  name="detalle" value="{{$teditar->detalle}}">
                </div>
                <div class="mb-3">
                <form action="/tipomed" method="PUT">
                        <button type="submit" class="btn btn-info">GUARDAR</button>
                        <a href="/tipomed" class="btn btn-danger">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
@endsection