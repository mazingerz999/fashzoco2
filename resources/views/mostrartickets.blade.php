@extends('layouts.master')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.5/JsBarcode.all.min.js"
        integrity="sha512-QEAheCz+x/VkKtxeGoDq6nsGyzTx/0LMINTgQjqZ0h3+NjP+bCsPYz3hn0HnBkGmkIFSr7QcEZT+KyEM7lbLPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="row d-flex justify-content-center p-3">
        <div class="col-6">
            <h2 class="text-center">Mis Tickets</h2>
        </div>
    </div>
    <div class="row d-flex px-5 justify-content-center">
        @foreach ($ticket as $value)
            <div class="col-2">
                <div class="card text-center border border-dark justify-center">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Detalles</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-borderless align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">Ticket</td>
                                        <td>#{{ $value->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Vendedor</td>
                                        <td>{{ $value->user->name }} <span> </span> {{ $value->user->apellidos }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Telefono</td>
                                        <td>{{ $value->user->telefono }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Email</td>
                                        <td>{{ $value->user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Producto</td>
                                        <td>{{ $value->producto->marca }} <span> | </span> {{ $value->producto->modelo }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Categoria</td>
                                        <td> <span
                                                class="badge badge-soft-primary">{{ $value->producto->categoria->nombrecategoria }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Envio</td>
                                        <td>{{ $value->envio->nombreCompania }} </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Estado</td>
                                        <td>
                                            <span class="badge bg-danger">Cerrado</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Fecha de venta</td>
                                        <td>{{ $value->fechaVenta }}</td>
                                    </tr>
                                    <tr >
                                        <td class="opacity-50"><img src="assets/images/proyecto/logoMiEmpresa.png" alt="" height="35"></td>
                                        <td><svg id="barcode" style="width: 20px" > </svg></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        @endforeach
    </div>
    <script>
        JsBarcode("#barcode", '12345678', {
            width: 2,
            height: 30,
            displayValue: false
        });
    </script>
@endsection
