@extends('layouts.cuerpo')
@section('hijos')
<h1>AGREGAR DETALLE DE EXISTENCIA</h1>
    <div class="row">
    <div class="col">
    <form action="/existencia" method="POST">
    @csrf
        <div class="mb-3">
        <label for="" class="form-label">ID DETALLE ENTRADA O EXISTENCIA:</label>
        <input type="text" name="iddexistencia" id="iddexistencia" class="form-control" placeholder="1">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">TOTAL PRODUCTO ENTRANTE:</label>
        <input type="text" name="total" id="total"  class="form-control" placeholder="1989">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">FECHA DE ENTRADA:</label>
        <input type="date" name="fecha" id="fecha" class="form-control" >
        </div>

        <div class="mb-3">
        <label for="" class="form-label">PROVEEDOR:</label>
                    <select class="form-control" id="idproveedor" name="idproveedor">
                        <option value="">SELECCIONE EL PROVEEDOR</option>
                        @foreach ($proveedor as $proveedores)
                            <option value="{{ $proveedores->id }}">{{ $proveedores->nomproveedor }}</option>
                        @endforeach
                    </select>
                    <a href="/proveedor/create"class="btn btn-success">Agregar</a>
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