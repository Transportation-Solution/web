<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\AutorizacionesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\VehiculosController;

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