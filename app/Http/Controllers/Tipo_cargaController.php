<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_Carga;

class Tipo_cargaController extends Controller
{
    public function index(){
        $tipo_cargas=Tipo_Carga::all();
        return view('tipo_carga.index', compact('tipo_cargas'));
    }
}
