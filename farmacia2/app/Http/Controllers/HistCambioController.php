<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistCambio;
use App\Models\Medicamentos;

class HistCambioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cambio=HistCambio::all();
        return view('cambio.index')->with('cambio',$cambio);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicamento=Medicamentos::all();
        return view('cambio.create',['medicamento'=>$medicamento]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cambio=new HistCambio();
        $cambio->fecha=$request->get('fecha');
        $cambio->idmedicamento=$request->get('idmedicamento');
        $cambio->cantidad=$request->get('cantidad');
      
       
        $cambio->save();
        
        return redirect('/cambio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cambio=HistCambio::all();
        
        return view ('cambio.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=HistCambio::find($id);
        $medicamento=Medicamentos::all();
        return view('cambio.edit',['medicamento'=>$medicamento])->with('cambio',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Editar=HistCambio::find($id);
        $Editar->fecha=$request->get('fecha');
        $Editar->idmedicamento=$request->get('idmedicamento');
        $Editar->cantidad=$request->get('cantidad');
       

        $Editar->save();
        return redirect('/cambio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=HistCambio::find($id);
        $Eliminar->delete();

        return redirect('/cambio');
    }
}
