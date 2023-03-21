<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargosController extends Controller
{
    public function index(){
        $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }
}
