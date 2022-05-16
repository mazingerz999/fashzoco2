@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center pt-4">
        <div class="col-6 ">
            <h2 class="text-center">ZAPPOS STORE</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center pt-2">
        <div class="col-4 ">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="button" id="button-addon2">Buscar</button>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-xxl-12">

            <div class="d-flex flex-column h-100">
                <div class="row">
                    {{-- <p>{{dd($ropaArray)}}</p> --}}
                    @foreach ($ropaArray as $value)
                        <div class="col-md-3 px-4">
                            <!-- EMPIEZA CARD -->
                            <div class="card border card-border-dark text-center" data-aos="flip-right">
                                <img class="card-img-top img-fluid p-1" src=""
                                    alt="">
                                <div class="card-body">
                                    <h4 class="card-title mb-2 text-primary">{{ $value->brandName }}</h4>
                                    <p class="card-text mb-0">{{ $value->productName }} </p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-link link-dark">Color: {{ $value->colorId }} <i
                                            class="ri-bookmark-line align-middle ms-1 lh-1"></i></p>
                                    <h4 class="card-link link-info">Precio: {{ $value->price }}</h4>
                                    <hr>
                                    <a href="{{$value->productUrl}} " target="_blank"> <button type="button"
                                            class="btn btn-success btn-label waves-effect right waves-light rounded-pill">
                                            <i
                                                class=" ri-shopping-cart-2-line  label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                            Comprar</button> </a>

                                </div>
                            </div>
                            <!-- FIN CARD -->
                        </div> <!-- end col-->
                    @endforeach

                </div> <!-- end row-->
            </div>

        </div>

    </div>

@endsection
