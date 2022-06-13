@extends('layouts.master')
@section('content')
<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h2> Editar producto</h2>
            </div>

            <div class="card-body" style="padding:30px">

                <form method="post"  action="{{ route('producto.update', $producto) }}" enctype="multipart/form-data">

                    {{-- TODO: Protección contra CSRF --}}
                    @csrf
                    @method('put')
                    <!-- Input with Value -->
                    <div class="form-group">

                        <label for="marca">Marca</label>
                        <input type="text" name="marca" id="marca" value="{{ $producto->marca}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">

                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" value="{{$producto->modelo}}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">

                        <label for="altura">Precio</label>
                        <input type="number" name="precio" id="precio" value="{{$producto->precio}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo" >Elige la categoria</label>
                        <select class="form-control" id="categoria" data-choices name="categoria"   name="categoria">
                            @foreach ($todasCategorias as $value)
                            <option value="{{$value->id}}">{{$value->nombrecategoria}}</option>
                            @endforeach
                        </select>
            </div>
                    <div class="form-group">

                        <label for="altura">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="{{$producto->cantidad}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">

                        <label for="fecha">Fecha</label>
                        <input type="date" name="fechaFabricacion" id="fechaFabricacion" value="{{$producto->fechaFabricacion}}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                                <label for="sexo" >Elige el sexo </label>
                                <select class="form-control" id="sexo" data-choices name="sexo">
                                        <option value="0">Masculino</option>
                                        <option value="1">Femenino</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label for="envio" >Elige el envio</label>
                        <select class="form-control" id="categoria" data-choices name="envio"   name="envio">
                            @foreach ($todosenvios as $value)
                            <option value="{{$value->id}}">{{$value->nombreCompania}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {{-- TODO: Completa el input para la alimentación --}}
                        <label for="imagen">Imagen</label>
                        <input type="file" name="imagen" value="" id="imagen"
                            class="form-control" >
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
                            Editar Producto
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection


