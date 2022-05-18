@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center pt-4">
        <div class="col-6 ">
            <h2 class="text-center">ZAPPOS MUJER</h2>
        </div>
    </div>


    <div class="row py-4">
        <div class="col-xxl-12">
            <div class="d-flex flex-column h-100">
                <div class="row">
                    @foreach ($ropaArray->results as $value)
                        <div class="col-md-3 px-4">
                            <!-- EMPIEZA CARD -->
                            <div class="card border card-border-dark text-center" data-aos="flip-right">
                                @if ($value->thumbnailImageUrl==null)
                                <img class="card-img-top img-fluid p-1" src="https://www.cuestalibros.com/content/images/thumbs/default-image_550.png"
                                    alt="">
                                @else
                                <img class="card-img-top img-fluid p-1" src="{{$value->thumbnailImageUrl}}"
                                    alt="">
                                @endif
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
