<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('producto.index')->with('productos', $productos);
    }

    public function create(){
        return view('producto.create');
    }

    public function store(Request $request){

        $productos = new Producto();
        $productos -> id = $request -> get('id');
        $productos -> nombre = $request -> get('nombre');
        $productos -> existencias = $request -> get('existencias');
        $productos -> categoria = $request -> get('categoria');
        $productos -> precio = $request -> get('precio');
        $productos -> save();

        return view('home');
    }

    public function edit($id){
        $producto = Producto::find($id);
        return view('producto.edit')->with('producto', $producto);
    }

    public function update(Request $request, $id){

        $productos = Producto::find($id);
        $productos -> id = $request -> get('id');
        $productos -> nombre = $request -> get('nombre');
        $productos -> existencias = $request -> get('existencias');
        $productos -> categoria = $request -> get('categoria');
        $productos -> precio = $request -> get('precio');
        $productos -> save();

        return view('home');
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $producto -> delete;

        return view('home');
    }


}
