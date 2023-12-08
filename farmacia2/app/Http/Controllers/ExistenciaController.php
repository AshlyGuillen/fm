<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Existencia;
use App\Models\Proveedores;

class ExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosExistencia=Existencia::all();
        return view('existencia.index')->with('existencia', $datosExistencia);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedor=Proveedores::all();
        return view('existencia.create',['proveedor'=>$proveedor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosExistencia = new Existencia();
        $datosExistencia->iddexistencia = $request->get('iddexistencia');
        $datosExistencia->total = $request->get('total');
        $datosExistencia->fecha = $request->get('fecha');
        $datosExistencia->idproveedor = $request->get('idproveedor');
        $datosExistencia->save();

        $nuevoId = $datosExistencia->id;

        return redirect('existencia/' . $nuevoId . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eeliminar = Existencia::find($id);
        return view('existencia.delete')->with('eliminar',$eeliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eeditar = Existencia::find($id);
        $proveedor=Proveedores::all();
        return view('existencia.edit',['proveedor'=>$proveedor])->with('editar',$eeditar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datosExistencia = Existencia::find($id);
        $datosExistencia->iddexistencia = $request->get('iddexistencia');
        $datosExistencia->total = $request->get('total');
        $datosExistencia->fecha = $request->get('fecha');
        $datosExistencia->idproveedor = $request->get('idproveedor');
        $datosExistencia->save();

        return redirect('existencia');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eeliminar=Existencia::find($id);
        $eeliminar->delete();

        return redirect('existencia');
    }
}
