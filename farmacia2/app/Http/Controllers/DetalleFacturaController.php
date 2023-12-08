<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;
use App\Models\DetalleFactura;

class DetalleFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle=DetalleFactura::all();
        return view('detalle.index')->with('detalle',$detalle);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicamento=Medicamentos::all();
        return view('detalle.create',['medicamento'=>$medicamento]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detalle=new DetalleFactura();
        $detalle->numventa=$request->get('numventa');
        $detalle->cantidad=$request->get('cantidad');
        $detalle->precio=$request->get('precio');
        $detalle->idmedicamento=$request->get('idmedicamento');
        $detalle->save();
        
        return redirect('/detalle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detalle=DetalleFactura::all();
        return view ('detalle.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=DetalleFactura::find($id);
        $medicamento=Medicamentos::all();
        return view('detalle.edit',['medicamento'=>$medicamento])->with('detalle',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Editar=DetalleFactura::find($id);
        $Editar->numventa=$request->get('numventa');
        $Editar->cantidad=$request->get('cantidad');
        $Editar->precio=$request->get('precio');
        $Editar->idmedicamento=$request->get('idmedicamento');       

        $Editar->save();
        return redirect('/detalle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=DetalleFactura::find($id);
        $Eliminar->delete();

        return redirect('/detalle');
    }
}