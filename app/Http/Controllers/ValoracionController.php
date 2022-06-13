<?php

namespace App\Http\Controllers;

use App\Models\valoracion;
use App\Http\Requests\StorevaloracionRequest;
use App\Http\Requests\UpdatevaloracionRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Usuario;

class ValoracionController extends Controller
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
    public function formulariovaloracion()
    {
        //
        return view("formulariovaloracion");
    }

    public function store(Request $request)
    {
        $valoracion=new valoracion();
        $valoracion->comentario=auth()->user()->name.' dijo: '.$request->comentario;
        $valoracion->estrellas= $request->estrellas;
        $valoracion ->save();

        return redirect()->route("listavaloraciones")->with("mensaje", "Ha habido un error");
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
     * Display the specified resource.
     *
     * @param  \App\Models\valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function listavaloraciones()
    {
        //
        $valoraciones=valoracion::all();

        return view('listavaloraciones', compact('valoraciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function edit(valoracion $valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevaloracionRequest  $request
     * @param  \App\Models\valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevaloracionRequest $request, valoracion $valoracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(valoracion $valoracion)
    {
        //
    }
}
