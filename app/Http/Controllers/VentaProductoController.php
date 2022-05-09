<?php

namespace App\Http\Controllers;

use App\Models\venta_producto;
use App\Http\Requests\Storeventa_productoRequest;
use App\Http\Requests\Updateventa_productoRequest;

class VentaProductoController extends Controller
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
     * @param  \App\Http\Requests\Storeventa_productoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeventa_productoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta_producto  $venta_producto
     * @return \Illuminate\Http\Response
     */
    public function show(venta_producto $venta_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta_producto  $venta_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(venta_producto $venta_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateventa_productoRequest  $request
     * @param  \App\Models\venta_producto  $venta_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Updateventa_productoRequest $request, venta_producto $venta_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta_producto  $venta_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta_producto $venta_producto)
    {
        //
    }
}
