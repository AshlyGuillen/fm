<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\FormaPago;
use App\Models\Empleado;
use App\Models\DetalleFactura;
use App\Models\Factura;
use App\Models\Proveedores;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factura=Factura::all();
        return view('factura.index')->with('factura',$factura);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $numventa = DetalleFactura::all(); 
        $cliente = Cliente::all();
        $empleado = Empleado::all();
        $formapago = FormaPago::all();
        $proveedor = Proveedores::all(); 

        return view('factura.create', compact('numventa', 'cliente', 'empleado', 'formapago', 'proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $factura=new Factura();
        $factura->numventa=$request->get('numventa');
        $factura->fecha=$request->get('fecha');
        $factura->idcliente=$request->get('idcliente');
        $factura->idempleado=$request->get('idempleado');
        $factura->idformapago=$request->get('idformapago');
        $factura->estado=$request->get('estado');
        $factura->total=$request->get('total');
        $factura->save();

        return redirect('/factura');
        
        /*$nuevoId = $factura->id;

        return redirect('factura/' . $nuevoId . '/edit');*/
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factura=Factura::all();
        return view ('factura.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar = Factura::find($id);
        $numventa = DetalleFactura::all(); 
        $cliente = Cliente::all();
        $empleado = Empleado::all();
        $formapago = FormaPago::all();
        $proveedor = Proveedores::all();

        return view('factura.edit', compact('editar', 'numventa', 'cliente', 'empleado', 'formapago', 'proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar = Factura::find($id);
        $factura->numventa=$request->get('numventa');
        $factura->fecha=$request->get('fecha');
        $factura->idcliente=$request->get('idcliente');
        $factura->idempleado=$request->get('idempleado');
        $factura->idformapago=$request->get('idformapago');
        $factura->estado=$request->get('estado');
        $factura->total=$request->get('total');
        return redirect('factura');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminar=Factura::find($id);
        $eliminar->delete();

        return redirect('factura');
    }
}
