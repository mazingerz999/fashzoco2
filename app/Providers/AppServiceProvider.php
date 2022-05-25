<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categoria;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $categoriasropa = Categoria::take(9)->get();

        View::share('categoriasRopa', $categoriasropa);
        //
        $categoriasZapatos = Categoria::skip(9)->take(10)->get();

        View::share('categoriasZapatos', $categoriasZapatos);
        //
        $categoriasAccesorios= Categoria::skip(19)->take(15)->get();

        View::share('categoriasAccesorios', $categoriasAccesorios);
        //
        $categoriasDeportes= Categoria::skip(34)->take(9)->get();

        View::share('categoriasDeportes', $categoriasDeportes);

    }
}
