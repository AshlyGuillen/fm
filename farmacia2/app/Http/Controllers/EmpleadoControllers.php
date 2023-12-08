<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\CargoEmpleado;

class EmpleadoControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado=Empleado::all();
        return view('empleado.index')->with('empleado',$empleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargo=cargoempleado::all();
        return view('empleado.create',['cargo'=>$cargo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado=new Empleado();
        $empleado->nomempleado=$request->get('nombre');
        $empleado->telefono=$request->get('telefono');
        $empleado->idcargo=$request->get('idcargo');
      
       
        $empleado->save();
        
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
       
        $empleado=Empleado::all();
        
        return view ('empleado.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=Empleado::find($id);
        $cargo=cargoempleado::all();
        return view('empleado.edit',['cargo'=>$cargo])->with('empleado',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Empleado::find($id);
        $editar->nomempleado=$request->get('nombre');
        $editar->telefono=$request->get('telefono');
        $editar->idcargo=$request->get('idcargo');
       

        $editar->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=Empleado::find($id);
        $Eliminar->delete();

        return redirect('/empleado');
    }
}
