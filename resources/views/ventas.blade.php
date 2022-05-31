@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center p-4">
        <div class="col-6 ">
            <h2 class="text-center">Datos de la compra</h2>
        </div>
    </div>

    @foreach ($ticket as $item)
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5" id="card-none1">
                <div class="card">
                    <!-- cabecera -->
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h6 class="card-title mb-0">TICKET</h6>
                            </div>
                            <div class="flex-shrink-0">
                                <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                                    <li class="list-inline-item">
                                        <a class="align-middle minimize-card" data-bs-toggle="collapse"
                                            href="#collapseexample1" role="button" aria-expanded="false"
                                            aria-controls="collapseExample2">
                                            <i class="mdi mdi-plus align-middle plus"></i>
                                            <i class="mdi mdi-minus align-middle minus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="align-middle" onclick="printDiv('card-none1')">
                                            <i class="mdi mdi-printer align-middle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- cuerpo -->
                    <div class="card-body collapse show" id="collapseexample1">
                        <div class="d-flex ">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Marca: {{ $item->marca }}
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Modelo: {{ $item->modelo }}
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Cantidad: {{ $item->cantidad }}
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Precio: {{ $item->precio }}€
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                @if ($item->sexo == 0)
                                    Sexo: Masculino
                                @else
                                    Sexo: Femenino
                                @endif
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Fecha Fabricación: {{ $item->fechaFabricacion }}
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Vendedor: {{ $item->user->name }} <span> </span> {{ $item->user->apellidos }}
                            </div>
                        </div>


                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Telefono: {{ $item->user->telefono }}
                            </div>
                        </div>


                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Localidad: {{ $item->user->localidad }}
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Provincia: {{ $item->user->provincia }}
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Email: {{ $item->user->email }}
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Envio: {{ $item->envio->nombreCompania }}
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Telefono {{ $item->envio->nombreCompania }}: <span> </span>{{ $item->envio->telefono }}
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Email {{ $item->envio->nombreCompania }}: <span> </span>{{ $item->envio->email }}
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted">
                                Metodo de pago: <span> </span>Contrarembolso
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="flex-shrink-0">
                                <i class="ri-send-plane-2-line  text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2 text-muted" id="codigo">

                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- end col -->
        </div>
    @endforeach
    <div class="d-flex my-2 justify-content-center">

        <a href="{{ route('insertDelete' , $item, $comprador ) }}" class="btn btn-success btn-label waves-effect right waves-light rounded-pill"><i class="ri-check-double-line label-icon align-middle rounded-pill fs-16 ms-2"></i> Finalizar Compra</a>

    </div>
    <script>
        function printDiv(nombreDiv) {
            var contenido = document.getElementById(nombreDiv).innerHTML;
            var contenidoOriginal = document.body.innerHTML;

            document.body.innerHTML = contenido;

            window.print();

            document.body.innerHTML = contenidoOriginal;
        }

            let alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
            let aux=""
            for (let i = 0; i < 20; i++) {
                let numRandom=Math.floor(Math.random() * alphabet.length-1);
               aux+=alphabet[numRandom]+numRandom;

            }
            document.getElementById("codigo").innerHTML ='Numero de pedido: '+aux;


    </script>
@endsection
