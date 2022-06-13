@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center ">
        <div class="col-6 ">
            <h2 class="text-center">Mis articulos</h2>
        </div>
    </div>
    <div class="row p-5 d-flex justify-content-center ">
 @if (count($productos)>0)
 @foreach ($productos as $producto)
 <div class="col-md-4 px-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
     <div class="card card-body">
         <div class="d-flex mb-4 align-items-center">
             <div class="flex-shrink-0">
                 <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xl " />
             </div>
             <div class="flex-grow-1 ms-2">
                 <h5 class="card-title mb-1">{{$producto->marca}} <span> | </span> {{$producto->modelo}} </h5>
             </div>
         </div>
         <h6 class="mb-1">Precio: {{$producto->precio}} €</h6>
         <h6 class="mb-1">Año de fabricación: {{$producto->fechaFabricacion}}</h6>
         <p class="card-text text-muted mb-1">Sexo: Masculino</p>
         <p class="card-text text-muted">Cantidad: {{ $producto->cantidad }}</p>
         <a href="{{route('producto.edit' , $producto)}}" class="btn btn-primary btn-sm">Editar</a>
     </div>
 </div>
 @endforeach
 @else
 <div class="col-md-4 px-4" >
   <p>Parece que no dispones de ningun producto</p>
 </div>
 @endif
    </div>

@endsection
