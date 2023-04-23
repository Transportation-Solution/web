<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_Documento;

class Tipo_documentoController extends Controller
{
    public function index(){
        $tipo_documentos=Tipo_Documento::all();
        return view('tipo_documentos.index', compact('tipo_documentos'));
    }
    public function create(){
        return view('tipo_documentos.create');
    }
}
