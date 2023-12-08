@extends('layouts.cuerpo')
@section('hijos')
    <h1>AGREGAR NUEVO MEDICAMENTO</h1>

    <div class="row">
        <div class="col">
            <form action="/medicamento" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre">NOMBRE MEDICAMENTO:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Alka Seltzer">
                </div>
                <br>
        
                <div class="mb-3">
                    <label for="idtipo" class="form-label">TIPO MEDICAMENTO</label>
                    <select class="form-control" id="idtipo" name="idtipo">
                        <option value="">SELECCIONE EL TIPO DE MEDICAMENTO</option>
                        @foreach ($tipo as $tipomed)
                            <option value="{{ $tipomed->id }}">{{ $tipomed->tipo }}</option>
                        @endforeach
                    </select>
                    <a href="/tipomed/create"class="btn btn-success">Agregar</a>
                </div>
                <br>
                <div class="mb-3">
                    <label for="stock" class="form-label">STOCK</label>
                    <input type="text" name="stock" id="stock" class="form-control" placeholder="Cantidad restante en el estante">
                </div>
                <br>
                <div class="mb-3">
                    <label for="descripcion_producto" class="form-label">DESCRIPCION DEL MEDICAMENTO:</label>
                    <input type="text" name="descripcion_producto" id="descripcion_producto" class="form-control" placeholder="Sirve para calmar el dolor">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="/medicamento" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
