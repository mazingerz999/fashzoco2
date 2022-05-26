<?php

namespace App\Http\Controllers;

use App\Models\envio;
use App\Models\Producto;
use App\Http\Requests\StoreenvioRequest;
use App\Http\Requests\UpdateenvioRequest;

class EnvioController extends Controller
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
     * @param  \App\Http\Requests\StoreenvioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreenvioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function show(envio $envio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function edit(envio $envio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateenvioRequest  $request
     * @param  \App\Models\envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateenvioRequest $request, envio $envio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function destroy(envio $envio)
    {
        //
    }
}
