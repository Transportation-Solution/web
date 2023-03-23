<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculosController extends Controller
{
    public function index(){
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }
}
