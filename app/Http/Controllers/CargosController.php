<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargosController extends Controller
{
    public function index(){
        $cargo = Cargo::all();
        return view('cargo.index', compact('cargo'));
    }
    public function create(){
        return view('cargo.create');
    }
    public function store(Request $request){
        Cargo::create($request->all());
        return redirect()->route('cargos');
    }
    public function delete($id){
        Cargo::find($id)->delete();
        return redirect()->route('cargos');
    } 
    public function show($id){
        $cargo = Cargo::find($id);
        return view('cargo.show', compact('cargo'));
    }
    public function edit($id){
        $cargo = Cargo::find($id);
        return view('cargo.edit', compact('cargo'));
    }
    public function update(Request $request, $id){
        $cargo = Cargo::find($id)->update($request->all());
        return redirect()->route('cargos');
    }
}
