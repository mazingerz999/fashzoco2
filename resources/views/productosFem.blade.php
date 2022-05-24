@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h2 class="text-center">Lista de Productos</h2>
        </div>
    </div>
    <div class="row d-flex p-3">
        @foreach ($prodFemenino as $producto)
        <div class="col-md-3">
            <div class="card card-body">
                <div class="d-flex mb-4 align-items-center">
                    <div class="flex-shrink-0">
                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xl " />
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="card-title mb-1">{{$producto->marca}} <span> | </span> {{$producto->modelo}} </h5>
                        <p class="text-muted mb-0">Vendedor: {{$producto->user->name}}</p>
                    </div>
                </div>
                <h6 class="mb-1">Precio: {{$producto->precio}} €</h6>
                <h6 class="mb-1">Año de fabricación: {{$producto->fechaFabricacion}}</h6>
                <p class="card-text text-muted mb-1">Sexo: Masculino</p>
                <p class="card-text text-muted">Cantidad: {{ $producto->cantidad }}</p>
                <a href="hacerlainsert" class="btn btn-primary btn-sm">Comprar</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
