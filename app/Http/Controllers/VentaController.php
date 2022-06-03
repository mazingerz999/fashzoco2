<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\venta;
use App\Http\Requests\StoreventaRequest;
use App\Http\Requests\UpdateventaRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VentaController extends Controller
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
    public function productoEnvio(Producto $producto)
    {
        $ticket = Producto::where('id', '=', $producto->id)->where('user_id', '=', $producto->user_id)->where('envio_id', '=', $producto->envio_id)->get();
        return view('ventas', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }
    public function mostrartickets(){
        //
        $ticket=Venta::where('comprador_id','=', auth()->user()->id)->get();
        return view('mostrartickets', compact('ticket'));
    }

    public function insertDelete(Producto $item)
    {
         $date = date('Y-m-d');
       $venta=new venta();
         $venta->fechaVenta=$date;
         $venta->comprador_id=auth()->user()->id;
         $venta->user_id=$item->user_id;
        $venta->producto_id=$item->id;
         $venta->envio_id=$item->envio_id;
        $venta->save();
        Producto::where('id',$item->id)->update(['vendido' => 1]);
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateventaRequest  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateventaRequest $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
    }
}
