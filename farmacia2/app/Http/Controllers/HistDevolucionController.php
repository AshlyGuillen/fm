<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;
use App\Models\HistDevolucion;

class HistDevolucionController extends Controller
{
    public function index()
    {
        $devolucion=HistDevolucion::all();
        return view('devolucion.index')->with('devolucion',$devolucion);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicamento=Medicamentos::all();
        return view('devolucion.create',['medicamento'=>$medicamento]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $devolucion=new HistDevolucion();
        $devolucion->fecha=$request->get('fecha');
        $devolucion->idmedicamento=$request->get('idmedicamento');
        $devolucion->cantidad=$request->get('cantidad');
      
       
        $devolucion->save();
        
        return redirect('/devolucion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $devolucion=HistDevolucion::all();
        
        return view ('devolucion.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=HistDevolucion::find($id);
        $medicamento=Medicamentos::all();
        return view('devolucion.edit',['medicamento'=>$medicamento])->with('devolucion',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Editar=HistDevolucion::find($id);
        $Editar->fecha=$request->get('fecha');
        $Editar->idmedicamento=$request->get('idmedicamento');
        $Editar->cantidad=$request->get('cantidad');
       

        $Editar->save();
        return redirect('/devolucion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=HistDevolucion::find($id);
        $Eliminar->delete();

        return redirect('/devolucion');
    }
}
