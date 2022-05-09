<?php

namespace App\Http\Controllers;

use App\Models\valoracion;
use App\Http\Requests\StorevaloracionRequest;
use App\Http\Requests\UpdatevaloracionRequest;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevaloracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevaloracionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function show(valoracion $valoracion)
    {
        //
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
