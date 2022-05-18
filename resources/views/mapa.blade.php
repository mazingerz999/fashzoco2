@extends('layouts.master')
@section('content')
    <div class="row d-flex justify-content-center >
        <div class="col-6 ">
            <h2 class="text-center">Tiendas en Santander</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-md-10 py-3" >
            <x-maps-google
            :centerPoint="['lat' => 43.461776069832915, 'long' => -3.813654225782681]"
            :zoomLevel="19"
            :markers="[['lat' => 43.461418775260256, 'long' => -3.8138860146955222],
             ['lat' => 43.46166853479531, 'long' => -3.812504839524159],
             ['lat' => 43.461634854156785, 'long' => -3.8132811729732294],
             ['lat' => 43.46213324352378, 'long' => -3.8126589005256695],
             ['lat' => 43.461736508053065, 'long' => -3.8143752552592285],
             ['lat' => 43.462063157767304, 'long' => -3.8129646723317987],
             ['lat' => 43.46145226319877, 'long' => -3.8147830206476514],
             ['lat' => 43.46208068932337, 'long' => -3.8139490343766607] ,
             ['lat' => 43.46158228941372, 'long' => -3.8135976736146606],
             ['lat' => 43.462110519571894, 'long' => -3.8121481545020366]  ] "></x-maps-google>
        </div>
    </div>

@endsection


