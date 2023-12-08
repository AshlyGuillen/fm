<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;
use App\Models\TipoMedicamento;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosMed = Medicamentos::all();
        return view('medicamento.index')->with('medicamento', $datosMed);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipomed = TipoMedicamento::all();
        return view('medicamento.create', ['tipo' => $tipomed]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicamentos = new Medicamentos();
        $medicamentos->nombre = $request->get('nombre');
        $medicamentos->idtipo = $request->get('idtipo');
        $medicamentos->stock = $request->get('stock');
        $medicamentos->descripcion_producto = $request->get('descripcion_producto');
        $medicamentos->save();

        $nuevoId = $medicamentos->id;

        return redirect('medicamento/' . $nuevoId . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medicamentos = Medicamentos::all();
        return view('medicamento.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mededitar = Medicamentos::find($id);
        $tipomed = TipoMedicamento::all();
        return view('medicamento.edit', ['tipo' => $tipomed])->with('editar', $mededitar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medicamentos = Medicamentos::find($id);
        $medicamentos->nombre = $request->get('nombre');
        $medicamentos->idtipo = $request->get('idtipo');
        $medicamentos->stock = $request->get('stock');
        $medicamentos->descripcion_producto = $request->get('descripcion_producto');
        $medicamentos->save();

        return redirect('medicamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medeliminar = Medicamentos::find($id);
        $medeliminar->delete();

        return redirect('medicamento');
    }
}

