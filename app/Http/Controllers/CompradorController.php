<?php

namespace App\Http\Controllers;

use App\Models\comprador;
use App\Http\Requests\StorecompradorRequest;
use App\Http\Requests\UpdatecompradorRequest;

class CompradorController extends Controller
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
     * @param  \App\Http\Requests\StorecompradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecompradorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show(comprador $comprador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(comprador $comprador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecompradorRequest  $request
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecompradorRequest $request, comprador $comprador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(comprador $comprador)
    {
        //
    }
}
