@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h2 class="text-center">{{$prodMasculino[0]->categoria->nombrecategoria}}</h2>
        </div>
    </div>
   {{-- {{ dd($prodMasculino[0]) }} --}}
    <div class="row d-flex p-3">
        @if (count($prodMasculino)<=0)
        <p class="text-muted mt-4 ">No hay articulos en esta categoria!</p>
        @else
        @foreach ($prodMasculino as $producto)
        @if ($producto->vendido==0)
        <div class="col-md-4">
            <div class="card card-body">
                <div class="d-flex mb-4 align-items-center">
                    <div class="flex-shrink-0">
                        {{-- <img src="assets/images/users/avatar-4.jpg" alt="" /> --}}
                        <div class="avatar-xl " >
                            {{-- {{dd($imagenQR)}} --}}
                        </div>

                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="card-title mb-1">{{$producto->marca}} <span> | </span> {{$producto->modelo}} </h5>
                        <a href="#"><p class="text-muted mb-0">Vendedor: {{$producto->user->name}}</p></a>
                    </div>
                </div>
                <h6 class="mb-1">Precio: {{$prodMasculino[0]->precio}} €</h6>
                <h6 class="mb-1">Año de fabricación: {{$prodMasculino[0]->fechaFabricacion}}</h6>
                <p class="card-text text-muted mb-1">Sexo: Masculino</p>
                <p class="card-text text-muted">Cantidad: {{ $prodMasculino[0]->cantidad }}</p>
                <a href="{{route('productoEnvio' , $producto )}}" class="btn btn-primary btn-sm">Comprar</a>
            </div>
        </div>
        @endif
        @endforeach
        @endif

    </div>

@endsection
