<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CargoEmpleado;

class CargoEmpleadoControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datocargo=CargoEmpleado::all();
        return view('cargo.index')->with('cargo',$datocargo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargo=new CargoEmpleado();
        $cargo->nomcargo=$request->get('nombre');
        

        $cargo->save();
        return redirect('cargo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=CargoEmpleado::find($id);
        return view('cargo.edit')->with('cargo',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=CargoEmpleado::find($id);
        $editar->nomcargo=$request->get('cargo');
       

        $editar->save();
        return redirect('cargo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminar=CargoEmpleado::find($id);
        $eliminar->delete();
        return redirect('cargo');

    }
}
