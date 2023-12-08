<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoMedicamento;
use App\Http\Controllers\FormaPago;
use App\Http\Controllers\DExistencia;
use App\Http\Controllers\Empleado;
use App\Http\Controllers\CargoEmpleado;
use App\Http\Controllers\Proveedores;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\HistCambioController;
use App\Http\Controllers\HistDevolucionController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\FacturaControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('ruta');
})->name('ruta');

Route::resource('/medicamento','App\Http\Controllers\MedicamentoController');
Route::resource('/tipomed','App\Http\Controllers\TipoMedicamentoController');
Route::resource('/dexistencia','App\Http\Controllers\DExistenciaController');
Route::resource('/existencia','App\Http\Controllers\ExistenciaController');
Route::resource('/pago','App\Http\Controllers\FormaPagoController');

Route::resource('/cargo','App\Http\Controllers\CargoEmpleadoControllers');
Route::resource('/cliente','App\Http\Controllers\ClienteControllers');
Route::resource('/proveedor','App\Http\Controllers\ProveedoresControllers');
Route::resource('/empleado','App\Http\Controllers\EmpleadoControllers');

Route::resource('/cambio','App\Http\Controllers\HistCambioController');
Route::resource('/devolucion','App\Http\Controllers\HistDevolucionController');
Route::resource('/detalle','App\Http\Controllers\DetalleFacturaController');
Route::resource('/factura','App\Http\Controllers\FacturaController');

Route::get('medicamento/{id}/edit', 'MedicamentoController@edit');
Route::get('tipomed/{id}/edit', 'TipoMedicamentoController@edit');
Route::get('pago/{id}/edit', 'FormaPagoController@edit');
Route::get('dexistencia/{id}/edit', 'DExistenciaController@edit');
Route::get('existencia/{id}/edit', 'ExistenciaController@edit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
