<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Categoria;
use App\Models\envio;
use App\Models\User;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarproductos()
    {
        //
        $productos=Producto::where('user_id', '=',  auth()->user()->id)->get();

        return view('mostrarproductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //

    }
    public function productosHombre(Categoria $categoria)
    {

        $prodMasculino= Producto::where('sexo', '=', '0')->where('categoria_id', '=', $categoria->id)->get();
        //return (json_encode($categoria));
        return view('productosMasc', compact('prodMasculino'));

    }
    public function productosMujer(Categoria $categoria)
    {
        //select * from productos where sexo=0
        $prodFemenino = Producto::where('sexo', '=', '1')->where('categoria_id', '=', $categoria->id)->get();
        return view('productosFem', compact('prodFemenino'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        return view("formulariomodificar", compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto  $producto) {


        $producto->marca=$request->marca;
        $producto->modelo= $request->modelo;
        $producto->cantidad=$request->cantidad;
        $producto->precio= $request->precio;
        $producto->sexo= intval($request->sexo);
        $producto->fechaFabricacion= $request->fechaFabricacion;

       // $producto->imagen= $request->imagen->store('', 'animales');
        $producto->save();
        return view("index")->with("mensaje", "Ha habido un error");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
