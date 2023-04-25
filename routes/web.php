<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\AutorizacionesController;





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