@extends('layouts.cuerpo')

@section('hijos')
    <h1>AGREGAR NUEVA FACTURA</h1>

    <div class="row">
        <div class="col">
            <form action="/factura" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="numventa" class="form-label">NUMERO VENTA:</label>
                    <select class="form-control" id="numventa" name="numventa">
                    <option value="">SELECCIONE EL NUMERO DE VENTA</option>
                        @foreach ($numventa as $numventas)
                            <option value="{{ $numventas->id }}" {{$editar->numventa == $numventas->id ? 'selected' : ''}}>
                            {{ $numventas->numventa }}
                        </option>
                        @endforeach
                    </select>
                    <a href="/detalle/create" class="btn btn-success">Crear Nueva Venta</a>
                </div> 

                <div class="mb-3">
                    <label for="fecha" class="form-label">FECHA DE REALIZACION:</label>  
                    <input type="date" name="fecha" id="fecha" class="form-control"  value="{{$editar->fecha}}">
                </div>

                <div class="mb-3">
                    <label for="idcliente" class="form-label">CLIENTE:</label>
                    <select class="form-control" id="idcliente" name="idcliente">
                        <option value="">SELECCIONE EL CLIENTE</option>
                        @foreach ($cliente as $clientes)
                        <option value="{{ $clientes->id }}" {{$editar->idcliente == $clientes->id ? 'selected' : ''}}>
                        {{ $clientes->nomcliente }}
                        </option>
                        @endforeach
                    </select>
                    <a href="/cliente/create" class="btn btn-success">Crear Nuevo Cliente</a>
                </div>

                <div class="mb-3">
                    <label for="idempleado" class="form-label">EMPLEADO:</label>
                    <select class="form-control" id="idempleado" name="idempleado">
                        <option value="">SELECCIONE EL EMPLEADO</option>
                        @foreach ($empleado as $empleados)
                            <option value="{{ $empleados->id }}" {{$editar->idempleado == $empleados->id ? 'selected' : ''}}>
                        {{ $empleados->nomempleado }}
                        </option>
                        @endforeach
                        <a href="/empleado/create" class="btn btn-success">Crear Nuevo Empleado</a>
                    </select>

                </div>

                <div class="mb-3">
                    <label for="idformapago" class="form-label">FORMA DE PAGO:</label>
                    <select class="form-control" id="idformapago" name="idformapago">
                        <option value="">SELECCIONE LA FORMA DE PAGO</option>
                        @foreach ($formapago as $formapagos)
                        <option value="{{ $formapagos->id }}" {{$editar->idformapago == $formapagos->id ? 'selected' : ''}}>
                        {{ $formapagos->formapago }}
                        </option>
                        @endforeach
                    </select>
                    <a href="/pago/create" class="btn btn-success">Crear Nueva Forma de Pago</a>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">ESTADO:</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{$editar->estado}}">
                </div>

                <div class="mb-3">
                    <label for="total" class="form-label">TOTAL VENTA:</label>
                    <input type="text" name="total" id="total" class="form-control" value="{{$editar->total}}" readonly>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="/factura" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
