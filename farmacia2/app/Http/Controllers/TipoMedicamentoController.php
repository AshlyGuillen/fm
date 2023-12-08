<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoMedicamento;

class TipoMedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosTipo=TipoMedicamento::all();
        return view('tipomed.index')->with('tipomed', $datosTipo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipomed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosTipo = new TipoMedicamento();
        $datosTipo->tipo = $request->get('tipo');
        $datosTipo->detalle = $request->get('detalle');
        $datosTipo->save();

        $nuevoId = $datosTipo->id;

        return redirect('tipomed/' . $nuevoId . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoeliminar = TipoMedicamento::find($id);
        return view('tipomed.delete')->with('teliminar',$tipoeliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipoeditar = TipoMedicamento::find($id);
        return view('tipomed.edit')->with('teditar',$tipoeditar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datosTipo = TipoMedicamento::find($id);
        $datosTipo->tipo = $request->get('tipo');
        $datosTipo->detalle = $request->get('detalle');
        $datosTipo->save();

        return redirect('tipomed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipoeliminar=TipoMedicamento::find($id);
        $tipoeliminar->delete();

        return redirect('tipomed');
    }
}
