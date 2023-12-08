<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datocliente=Cliente::all();
        return view('cliente.index')->with('cliente',$datocliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente=new Cliente();
        $cliente->nomcliente=$request->get('nombre');
        $cliente->direccion=$request->get('direccion');
        $cliente->telefono=$request->get('telefono');
        $cliente->correo=$request->get('correo');

        $cliente->save();
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente=Cliente::all();
        return view ('cliente.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Editar=Cliente::find($id);
        return view('cliente.edit')->with('cliente',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Cliente::find($id);
        $editar->nomcliente=$request->get('nombre');
        $editar->direccion=$request->get('direccion');
        $editar->telefono=$request->get('telefono');
        $editar->correo=$request->get('correo');
       

        $editar->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminar=Cliente::find($id);
        $eliminar->delete();
        return redirect('cliente');
    }
}
