<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DExistencia;
use App\Models\Medicamentos;

class DExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detallee=DExistencia::all();
        return view('dexistencia.index')->with('dexistencia', $detallee);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicamento=Medicamentos::all();
        return view('dexistencia.create',['medicamento'=>$medicamento]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detallee = new DExistencia();
        $detallee->cantidad = $request->get('cantidad');
        $detallee->precio = $request->get('precio');
        $detallee->idmedicamento = $request->get('idmedicamento');
        $detallee->fechavencimiento = $request->get('fechavencimiento');
        $detallee->estado = $request->get('estado');
        $detallee->save();

        $nuevoId = $detallee->id;

        return redirect('dexistencia/' . $nuevoId . '/edit');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detallee=DExistencia::all();
        return view ('dexistencia.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $deeditar = DExistencia::find($id);
        $medicamento=Medicamentos::all();
        return view('dexistencia.edit',['medicamento'=>$medicamento])->with('deeditar',$deeditar);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detallee = DExistencia::find($id);
        $detallee->cantidad = $request->get('cantidad');
        $detallee->precio = $request->get('precio');
        $detallee->idmedicamento = $request->get('idmedicamento');
        $detallee->fechavencimiento = $request->get('fechavencimiento');
        $detallee->estado = $request->get('estado');
        $detallee->save();

        return redirect('dexistencia');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deeliminar=DExistencia::find($id);
        $deeliminar->delete();

        return redirect('dexistencia');
    }
}
