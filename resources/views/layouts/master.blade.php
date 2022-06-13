<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-topbar="dark" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')Fashzoco | Vende tu ropa - Rapido y Seguro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Vende tu ropa - Rapido y Seguro" name="description" />
    <meta content="Alberto" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    @include('layouts.head-css')
</head>

@section('body')
    @include('layouts.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

            @include('layouts.footer')
        </div>
        <!-- end main content-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')


</body>

</html>
