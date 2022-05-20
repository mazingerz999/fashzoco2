@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h2 class="text-center">Lista de Productos</h2>
            {{ dd($prodMasculino) }}
        </div>
    </div>

@endsection
