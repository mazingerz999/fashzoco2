@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h2 class="text-center">Resultado</h2>
           {{-- <p>{{$busqueda}}</p> --}}
        </div>
    </div>
    <div class="row d-flex p-3">
        @if (count($productos)<=0)
        <p class="text-muted mt-4 ">Ups parece que no hay el articulo que buscas!</p>
        @else
        @foreach ($productos as $producto)
        @if ($producto->vendido==0)
        <div class="col-md-4 " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="card card-body">
                <div class="d-flex mb-4 align-items-center">
                    <div class="flex-shrink-0">
                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xl " />
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="card-title mb-1">{{$producto->marca}} <span> | </span> {{$producto->modelo}} </h5>
                        <a href="#"><p class="text-muted mb-0">Vendedor: {{$producto->user->name}}</p></a>
                    </div>
                </div>
                <h6 class="mb-1">Precio: {{$producto->precio}} €</h6>
                <h6 class="mb-1">Año de fabricación: {{$producto->fechaFabricacion}}</h6>
                <p class="card-text text-muted mb-1">Sexo: Masculino</p>
                <p class="card-text text-muted">Cantidad: {{ $producto->cantidad }}</p>
                <a href="{{route('productoEnvio' , $producto)}}" class="btn btn-primary btn-sm">Comprar</a>
            </div>
        </div>
        @endif
        @endforeach
        @endif

    </div>

@endsection
