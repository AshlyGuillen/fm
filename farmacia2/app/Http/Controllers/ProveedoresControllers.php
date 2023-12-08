<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedoresControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datoproveedores=Proveedores::all();
        return view('proveedor.index')->with('proveedor',$datoproveedores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor=new Proveedores();
        $proveedor->nomproveedor=$request->get('nombre');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->correo=$request->get('correo');

        $proveedor->save();
        return redirect('proveedor');
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
        $Editar=Proveedores::find($id);
        return view('proveedor.edit')->with('proveedor',$Editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor= Proveedores::find($id);
        $proveedor->nomproveedor=$request->get('nombre');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->correo=$request->get('correo');
       

        $proveedor->save();
        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminar=Proveedores::find($id);
        $eliminar->delete();
        return redirect('proveedor');
    }
}
