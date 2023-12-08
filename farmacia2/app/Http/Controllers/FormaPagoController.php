<?php

namespace App\Http\Controllers;
use App\Models\FormaPago;

use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosFP=FormaPago::all();
        return view('pago.index')->with('pago', $datosFP);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pago = new FormaPago();
        $pago->formapago = $request->get('formapago');
        $pago->descripcion = $request->get('descripcion');
        $pago->save();

        $nuevoId = $pago->id;

        return redirect('pago/' . $nuevoId . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peliminar = FormaPago::find($id);
        return view('pago.delete')->with('eliminar',$peliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peditar = FormaPago::find($id);
        return view('pago.edit')->with('editar',$peditar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pago = FormaPago::find($id);
        $pago->formapago = $request->get('formapago'); 
        $pago->descripcion = $request->get('descripcion');
        $pago->save();

        return redirect('pago');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peliminar=FormaPago::find($id);
        $peliminar->delete();

        return redirect('pago');
    }
}
