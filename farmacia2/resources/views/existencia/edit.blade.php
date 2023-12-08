@extends('layouts.cuerpo')
@section('hijos')
        <div class="row">
            <div class="col">
                <form action="/existencia/{{$editar->id}}" method="POST">
                @csrf
                @method('PUT')
                <h1>EDITAR ENTRADA O EXISTENCIA</h1>
                <div class="mb-3">
                    <label for="" class="form-label">ID ENTRADA O EXISTENCIA:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$editar->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ID DETALLE ENTRADA O EXISTENCIA:</label>
                    <input type="text" name="iddexistencia" id="iddexistencia" class="form-control" value="{{$editar->iddexistencia}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">TOTAL PRODUCTO ENTRANTE:</label>
                    <input type="text" name="total" id="total"  class="form-control" value="{{$editar->total}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">FECHA DE ENTRADA:</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{$editar->fecha}}">
                </div>
                <div class="mb-3">
                <label for="idproveedor" class="form-label">PROVEEDOR:</label>
                <select class="form-control" id="idproveedor" name="idproveedor">
                    <option value="">ELEGIR PROVEEDOR</option>
                    @foreach ($proveedor as $proveedores)
                        <option value="{{ $proveedores->id }}" {{$editar->idproveedor == $proveedores->id ? 'selected' : ''}}>
                            {{ $proveedores->nomproveedor }}
                        </option>
                    @endforeach
                </select>
                <a href="/proveedor/create"class="btn btn-success">Agregar</a>
            </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">GUARDAR</button>
                    <a href="/existencia" class="btn btn-danger">CANCELAR</a>
                </div>
                </div>
            </div>
        </div>
@endsection