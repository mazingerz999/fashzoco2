@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
    <div class="col">
        <h1 class="text-center">Valoraciones de los usuarios</h1>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-xl-9">
            @foreach ($valoraciones as $value)
            <div class="card border border-dashed shadow-none pt-2">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="assets/images/proyecto/logoMiEmpresa.png" alt="" class="avatar-sm rounded">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div>
                                <p class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                    "{{$value->comentario}}"</p>
                                    <div class="fs-11 align-middle text-warning">
                                        @if ($value->estrellas>0)
                                            @for ($i = 0; $i < $value->estrellas; $i++)
                                            <i class="ri-star-fill"></i>
                                            @endfor
                                        @else
                                        <i class="ri-star-half-fill"></i>
                                        @endif
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--end col-->
    </div>
    <script src="assets/libs/rater-js/rater-js.min.js"></script>
@endsection
