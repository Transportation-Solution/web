<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosController;

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