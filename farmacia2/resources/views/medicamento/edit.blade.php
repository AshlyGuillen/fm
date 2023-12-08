@extends('layouts.cuerpo')
@section('hijos')
    <div class="row">
        <div class="col">
            <form action="/medicamento/{{$editar->id}}" method="POST">
                @csrf
                @method('PUT')
                <h1>EDITAR MEDICAMENTOS</h1>
                <div class="mb-3">
                    <label for="id" class="form-label">ID MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$editar->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">NOMBRE MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$editar->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="idtipo" class="form-label">TIPO MEDICAMENTO:</label>
                    <select class="form-control" id="idtipo" name="idtipo">
                        <option value="">SELECCIONE UN TIPO DE MEDICAMENTO</option>
                        @foreach ($tipo as $tipomed)
                            <option value="{{ $tipomed->id }}" {{$editar->idtipo == $tipomed->id ? 'selected' : ''}}>
                                {{ $tipomed->tipo }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">CANTIDAD EN STOCK:</label>
                    <input type="text" class="form-control" id="stock"  name="stock" value="{{$editar->stock}}">
                </div>
                <div class="mb-3">
                    <label for="descripcion_producto" class="form-label">DESCRIPCION DEL MEDICAMENTO:</label>
                    <input type="text" class="form-control" id="descripcion_producto"  name="descripcion_producto" value="{{$editar->descripcion_producto}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">GUARDAR</button>
                    <a href="/medicamento" class="btn btn-danger">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
@endsection
