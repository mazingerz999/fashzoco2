@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center ">
        <div class="col-6 ">
            <h2 class="text-center">ASOS STORE</h2>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-xxl-12">
            <div class="d-flex flex-column h-100">
                <div class="row">
                    {{-- @foreach ($ropaArray as $value)
                        <div class="col-md-2">
                            <!-- EMPIEZA CARD -->
                            <div class="card border card-border-dark text-center" data-aos="flip-right">
                                <img class="card-img-top img-fluid p-1" src="{{ 'http://' . $value->imageUrl }}"
                                    alt="{{ $value->name }} ">
                                <div class="card-body">
                                    <h4 class="card-title mb-2 text-primary">{{ $value->brandName }}</h4>
                                    <p class="card-text mb-0">{{ $value->name }} </p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-link link-dark">Color: {{ $value->colour }} <i
                                            class="ri-bookmark-line align-middle ms-1 lh-1"></i></p>
                                    <h4 class="card-link link-info">Precio: {{ $value->price->current->value }} <i
                                            class="ri-money-euro-circle-line"></i></h4>
                                    <hr>
                                    <a href="{{$value->url}} " target="_blank"> <button type="button"
                                            class="btn btn-success btn-label waves-effect right waves-light rounded-pill">
                                            <i
                                                class=" ri-shopping-cart-2-line  label-icon align-middle rounded-pill fs-16 ms-2"></i>
                                            Comprar</button> </a>

                                </div>
                            </div>
                            <!-- FIN CARD -->
                        </div> <!-- end col-->
                    @endforeach --}}
                    <p>{{dd($ropaArray)}}</p>
                </div> <!-- end row-->
            </div>

        </div>

    </div>

@endsection
