@extends('layouts.master')
@section('content')
    <div class="row justify-content-center pt-5">
        <div class="col-xl-6">
            <div class="card text-center">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1 "><i class="mdi mdi-autorenew  text-success"></i> NOTICIAS <i class="mdi mdi-autorenew text-success"></i></h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Estas son las <code>ultimas</code> noticias.</p>
                    <div class="live-preview">
                        <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-inner" role="listbox">
                                <!-- opcion -->
                                <div class="carousel-item active">
                                    <img src="assets/images/noticias/vaquero.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Looks con los ultimos vaqueros en venta</h5>
                                        <p class="text-white">Descubre cómo elegir el mejor vaquero para hombres,
                                            todo lo que debes de tener en cuenta, más allá del gusto personal y el tipo de cuerpo.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item ">
                                    <img src="assets/images/noticias/sanvalentin.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Looks para citas de San Valentín</h5>
                                        <p class="text-white">Descubre los Looks para citas de San Valentín y que es
                                            lo mas aconsejable para ti.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/noticias/sanvalentin.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">Looks para citas de San Valentín</h5>
                                        <p class="text-white">Descubre los Looks para citas de San Valentín y que es
                                            lo mas aconsejable para ti.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/noticias/zapatostrabajo.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">El calzado imprescindible para ir al trabajo</h5>
                                        <p class="text-white">¿Sabes lo que tienes que tener en cuenta para un
                                            calzado seguro?, ¿En tu trabajo hay riesgos? Revisa lo imprescindible para un calzado de
                                            trabajo seguro.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/noticias/adidas.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">¿Cómo combinar las Adidas Superstar?</h5>
                                        <p class="text-white">¿Cómo combinar unas Adidas Superstar?. Una de las
                                            zapatillas más míticas de la marca Adidas y de la historia de las zapatillas.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/noticias/ventaropa.png" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">¿Cómo empezar a vender tu marca de ropa por
                                            Internet?</h5>
                                        <p class="text-white">¿Te has planteado comenzar a vender las prendas de tu
                                            marca por internet?, ¿Crear una marca de ropa o accesorios desde cero?.</p>
                                    </div>
                                </div>
                                <!-- opcion -->
                                <div class="carousel-item">
                                    <img src="assets/images/noticias/zapatoscuero.jpg" alt="" class="d-block img-fluid mx-auto">
                                    <div class="carousel-caption text-white-50">
                                        <h5 class="text-white">¿Cómo combinar y elegir zapatos de cuero?</h5>
                                        <p class="text-white">¿Cómo combinar y elegir unos zapatos de cuero?. Este
                                            tipo de calzado no es fácil de elegir y tampoco de combinar, aquí te enseñamos cómo
                                            hacerlo.</p>
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
