@extends('layouts.cuerpo')
@section('hijos')
        <div class="row">
            <div class="col">
                <form action="/dexistencia/{{$deeditar->id}}" method="POST">
                @csrf
                @method('PUT')
                <h1>EDITAR DETALLE DE EXISTENCIA</h1>
                <div class="mb-3">
                    <label for="" class="form-label">ID DETALLE EXISTENCIA:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$deeditar->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CANTIDAD EXISTENTE:</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$deeditar->cantidad}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">PRECIO UNITARIO:</label>
                    <input type="text" class="form-control" id="precio"  name="precio" value="{{$deeditar->precio}}">
                </div>

                <div class="mb-3">
                    <label for="idmedicamento" class="form-label">Medicamento</label>
                    <select class="form-control" id="idmedicamento" name="idmedicamento">
                    <option value="">SELECCIONE UN MEDICAMENTO</option>
                        @foreach ($medicamento as $medicamentos)
                    <option value="{{ $medicamentos->id }}" {{$deeditar->idmedicamento == $medicamentos->id ? 'selected' : ''}}>
                        {{ $medicamentos->nombre }}
                    </option>
                        @endforeach
                    </select>
                    <a href="/medicamento/create"class="btn btn-success">Agregar</a>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">FECHA DE VENCIMIENTO:</label>
                    <input type="date" class="form-control" id="fechavencimiento"  name="fechavencimiento" value="{{$deeditar->fechavencimiento}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ESTADO:</label>
                    <input type="text" class="form-control" id="estado"  name="estado" value="{{$deeditar->estado}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">GUARDAR</button>
                    <a href="/dexistencia" class="btn btn-danger">CANCELAR</a>
                </div>
                </div>
            </div>
        </div>
@endsection