<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\AutorizacionesController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\Registro_viajeController;
use App\Http\Controllers\CargosController;


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
    return view('welcome');
});
//Rutas de Departamentos
Route::get('departamentos', [DepartamentosController::class, 'index'])->name('departamentos');
Route::get('departamentos/crear', [DepartamentosController::class, 'create'])->name('departamentos.crear');
Route::post('departamentos', [DepartamentosController::class, 'store'])->name('departamentos.guardar');
Route::delete('dapartementos/{id}', [DepartamentosController::class, 'delete'])->name('departamentos.eliminar');
Route::get('departamentos/{id}', [DepartamentosController::class, 'show'])->name('departamentos.detalles');
Route::get('departamentos/{id}/editar', [DepartamentosController::class, 'edit'])->name('departamentos.editar');
Route::put('dapartamentos/{id}', [DepartamentosController::class, 'update'])->name('departamentos.actualizar');
//Rutas compras
Route::get('compras', [ComprasController::class, 'index'])->name('compras');
Route::get('compras/crear', [ComprasController::class, 'create'])->name('compras.crear');
Route::post('compras', [ComprasController::class, 'store'])->name('compras.guardar');
Route::delete('compras/{id}', [ComprasController::class, 'delete'])->name('compras.eliminar');
Route::get('compras/{id}', [ComprasController::class, 'show'])->name('compras.detalles');
Route::get('compras/{id}/editar', [ComprasController::class, 'edit'])->name('compras.editar');
Route::put('compras/{id}', [ComprasController::class, 'update'])->name('compras.actualizar');
//Rutas autorizacion 
Route::get('autorizaciones', [AutorizacionesController::class, 'index'])->name('Autorizaciones');
Route::get('autorizaciones/crear', [AutorizacionesController::class, 'create'])->name('Autorizaciones.crear');
Route::post('autorizaciones', [AutorizacionesController::class, 'store'])->name('Autorizaciones.guardar');
Route::delete('autorizaciones/{id}', [AutorizacionesController::class, 'delete'])->name('Autorizaciones.eliminar');
Route::get('autorizaciones/{id}', [AutorizacionesController::class, 'show'])->name('Autorizaciones.detalles');
Route::get('autorizaciones/{id}/editar', [AutorizacionesController::class, 'edit'])->name('Autorizaciones.editar');
Route::put('autorizaciones/{id}', [AutorizacionesController::class, 'update'])->name('Autorizaciones.actualizar');
//Rutas Municipios
Route::get('municipios', [MunicipiosController::class, 'index'])->name('municipios');
Route::get('municipios/crear', [MunicipiosController::class, 'create'])->name('municipios.crear');
Route::post('municipios', [MunicipiosController::class, 'store'])->name('municipios.guardar');
Route::delete('municipios/{id}', [MunicipiosController::class, 'delete'])->name('municipios.eliminar');
Route::get('municipios/{id}', [MunicipiosController::class, 'show'])->name('municipios.detalles');
Route::get('municipios/{id}/editar', [MunicipiosController::class, 'edit'])->name('municipios.editar');
Route::put('municipios/{id}', [MunicipiosController::class, 'update'])->name('municipios.actualizar');
//Rutas Vehiculos
Route::get('vehiculos', [VehiculosController::class, 'index'])->name('vehiculos');
Route::get('vehiculos/crear', [VehiculosController::class, 'create'])->name('vehiculos.crear');
Route::post('vehiculos', [VehiculosController::class, 'store'])->name('vehiculos.guardar');
Route::delete('vehiculos/{id}', [VehiculosController::class, 'delete'])->name('vehiculos.eliminar');
Route::get('vehiculos/{id}', [VehiculosController::class, 'show'])->name('vehiculos.detalles');
Route::get('vehiculos/{id}/editar', [VehiculosController::class, 'edit'])->name('vehiculos.editar');
Route::put('vehiculos/{id}', [VehiculosController::class, 'update'])->name('vehiculos.actualizar');
//Rutas Facturas
Route::get('facturas', [FacturaController::class, 'index'])->name('facturas');
Route::get('facturas/crear', [FacturaController::class, 'create'])->name('facturas.crear');
Route::post('facturas', [FacturaController::class, 'store'])->name('facturas.guardar');
Route::delete('facturas/{id}', [FacturaController::class, 'delete'])->name('facturas.eliminar');
Route::get('facturas/{id}', [FacturaController::class, 'show'])->name('facturas.detalles');
Route::get('facturas/{id}/editar', [FacturaController::class, 'edit'])->name('facturas.editar');
Route::put('facturas/{id}', [FacturaController::class, 'update'])->name('facturas.actualizar');
//Rutas Proveedores
Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores');
Route::get('proveedores/crear', [ProveedorController::class, 'create'])->name('proveedores.crear');
Route::post('proveedores', [ProveedorController::class, 'store'])->name('proveedores.guardar');
Route::delete('proveedores/{id}', [ProveedorController::class, 'delete'])->name('proveedores.eliminar');
Route::get('proveedores/{id}', [ProveedorController::class, 'show'])->name('proveedores.detalles');
Route::get('proveedores/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedores.editar');
Route::put('proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.actualizar');
//Rutas Registro_Viajes
Route::get('registro_viajes', [Registro_viajeController::class, 'index'])->name('registro_viajes');
Route::get('registro_viajes/crear', [Registro_viajeController::class, 'create'])->name('registro_viajes.crear');
Route::post('registro_viajes', [Registro_viajeController::class, 'store'])->name('registro_viajes.guardar');
Route::delete('registro_viajes/{id}', [Registro_viajeController::class, 'delete'])->name('registro_viajes.eliminar');
Route::get('registro_viajes/{id}', [Registro_viajeController::class, 'show'])->name('registro_viajes.detalles');
Route::get('registro_viajes/{id}/editar', [Registro_viajeController::class, 'edit'])->name('registro_viajes.editar');
Route::put('registro_viajes/{id}', [Registro_viajeController::class, 'update'])->name('registro_viajes.actualizar');
//Rutas Cargos
Route::get('cargos', [CargosController::class, 'index'])->name('cargos');
Route::get('cargos/crear', [CargosController::class, 'create'])->name('cargos.crear');
Route::post('cargos', [CargosController::class, 'store'])->name('cargos.guardar');
Route::delete('cargos/{id}', [CargosController::class, 'delete'])->name('cargos.eliminar');
Route::get('cargos/{id}', [CargosController::class, 'show'])->name('cargos.detalles');
Route::get('cargos/{id}/editar', [CargosController::class, 'edit'])->name('cargos.editar');
Route::put('cargos/{id}', [CargosController::class, 'update'])->name('cargos.actualizar');