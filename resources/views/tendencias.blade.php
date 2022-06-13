@extends('layouts.master')
@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-xl-6">
            <div class="card text-center">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><i class="ri-fire-line text-danger"></i> TENDENCIAS <i class="ri-fire-line text-danger"></i></h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Estas son las <code>tendencias</code> de esta temporada.</p>
                    <div class="live-preview">
                        <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-inner" role="listbox">
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/tendencias/Skort.png" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Luce pierna con los skorts</h5>
                                        <p class="text-white">Los skorts son la alternativa a las bermudas, ideal para los dias de calor. La combinación de falda y pantalón llega pisando fuerte para esta primavera-verano 2022 y es una prenda que muestra como la moda genderless ya no es una tendencia pasajera.</p>
                                    </div>
                                </div>
                                   <!-- opcion -->
                                <div class="carousel-item active">
                                    <img src="assets/images/tendencias/cardigans.png" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Cardigans de punto</h5>
                                        <p class="text-white">Los cardigans de punto fino serán tu aliado perfecto para el entretiempo. Los puedes combinar con pantalones de sastre, shorts o pantalones fluidos, los cardigans aportaran sofisticación a tu look, son versátiles, cómodos y flexibles.</p>
                                    </div>
                                </div>
                                   <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/tendencias/flare.png" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Vuelta a los 70 con los pantalones flare </h5>
                                        <p class="text-white">Ya los vimos la temporada pasada combinados con americanas ceñidas y camisas. Los pantalones flare han llegado para quedarse, pero en lugar de verlos en trajes, los combinaremos con todo tipo de prendas como jerséis de punto o camisetas. Además, los hemos visto en diferentes colores y con nuevas versiones denim. </p>
                                    </div>
                                </div>
                            </div>
                                   <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/tendencias/Skort.png" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">A lo grande con las camisas oversize </h5>
                                        <p class="text-white">Ni corta ni entallada, la camisa que triunfará esta primavera es la de corte oversize. Estas camisas ligeras, holgadas y despegadas del cuerpo no dan nada de calor, lo que las hace ideales para esta temporada. Las hay para todos los gustos, con estampados, de manga corta o en colores lisos. </p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!--end col-->
    </div>
@endsection
