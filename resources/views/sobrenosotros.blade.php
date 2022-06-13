@extends('layouts.master')
@section('content')
    <div class="row justify-content-center pt-5">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="card-title mb-0">Nuestra Marca</h6>
                        </div>
                        <div class="flex-shrink-0">
                            <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">

                                <li class="list-inline-item">
                                    <a class="align-middle minimize-card" data-bs-toggle="collapse" href="#collapseExample2"
                                        role="button" aria-expanded="true" aria-controls="collapseExample2">
                                        <i class="mdi mdi-plus align-middle plus"></i>
                                        <i class="mdi mdi-minus align-middle minus"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse show" id="collapseExample2" style="">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/proyecto/logoMiEmpresa.png" alt="">
                        </div>
                        <div class="flex-grow-1 ms-2 text-muted">Fashzoco tiene como objetivo la comercialización de
                            prendas de vestir y accesorios de vestimenta, regida
                            por las últimas tendencias de la moda para cada temporada (primavera-verano y otoño-invierno) en
                            ropa, calzado y accesorios.
                            En nuestra web encontraras siempre un portafolio de productos y servicios enfocados a la
                            satisfacción del hombre o la mujer que desea sentirse moderna y glamurosa en toda ocasión.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center pt-2">
        <div class="col-xl-6">

            <!-- Active Tables -->
            <table class="table table-nowrap mb-0">
                <thead>
                    <tr>
                        <th class="text-center" scope="col"> Instagram</th>
                        <th class="text-center" scope="col">Facebook</th>
                        <th class="text-center" scope="col">Youtube</th>
                        <th class="text-center" scope="col">Twitter</th>
                        <th class="text-center" scope="col">Linkedin</th>
                        <th class="text-center" scope="col">WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center ">
                            <a href=""><h2><i class="ri  ri-instagram-fill text-danger"></i></h2></a>
                        </td>
                        <td class="text-center ">
                            <a href=""><h2> <i class="ri ri-facebook-box-fill text-primary"></i></h2></a>
                        </td>
                        <td class="text-center ">
                            <a href=""><h2><i class="ri ri-youtube-fill text-danger"></i> </h2></a>
                        </td>
                        <td class="text-center ">
                            <a href=""><h2><i class="ri ri-twitter-fill text-primary "></i> </h2></a>
                        </td>
                        <td class="text-center ">
                            <a href=""><h2> <i class="ri ri-linkedin-box-fill  text-primary"></i> </h2></a>
                        </td>
                        <td class="text-center ">
                            <a href=""><h2><i class="ri  ri-whatsapp-line text-success "></i> </h2></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end col-->
    </div>
@endsection
