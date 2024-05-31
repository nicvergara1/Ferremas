<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }



    public function index()
    {
          
        $productos = Productos::get();
        return view('productos.index',compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductosRequest $request)
    {
        Productos::create([
            'nombre'=> $request->nombre,
            'marca'=> $request->marca,
            'precio'=> $request->precio,
            'stock'=> $request->stock,
            'descripcion'=> $request->descripcion,
            'imagen'=> $request->imagen,
        ]);

        return to_route('productos.index')->with('success','Producto agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        return view('Productos.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        $productos->update([
            'nombre'=> $request->nombre,
            'marca'=> $request->marca,
            'precio'=> $request->precio,
            'stock'=> $request->stock,
            'descripcion'=> $request->descripcion,
            'imagen'=> $request->imagen,
        ]);
        
        return to_route('productos.index')->with('success','Producto editado correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Productos $productos)
    {
       $productos->delete();

       return to_route('productos.index')->with('success','Producto eliminado correctamente');
    
    }
}
