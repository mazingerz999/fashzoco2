@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center">
    </div>
    <div class="row pt-5">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2> Añadir Valoracion</h2>
                </div>

                <div class="card-body" style="padding:30px">

                    <form method="post" action="{{ route('valoracion.store') }}" enctype="multipart/form-data">
                        {{-- TODO: Protección contra CSRF --}}
                        @csrf

                        <div class="form-group">
                            <label for="comentario" class="form-label">Escribe tu comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="estrellas" class="form-label">Valoracion</label>
                            <!-- Min and Max -->
                            <input type="range" class="form-range" min="0" max="5" id="estrellas" name="estrellas"
                                data-slider-size="sm" data-slider-style="square">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                                Añadir valoración
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
