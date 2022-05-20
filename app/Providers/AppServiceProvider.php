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
        $categoriasropa = Categoria::take(10)->get();

        View::share('categoriasRopa', $categoriasropa);
        //
        $categoriasZapatos = Categoria::skip(10)->take(10)->get();

        View::share('categoriasZapatos', $categoriasZapatos);
        //
        $categoriasAccesorios= Categoria::skip(20)->take(14)->get();

        View::share('categoriasAccesorios', $categoriasAccesorios);
        //
        $categoriasDeportes= Categoria::skip(34)->take(17)->get();

        View::share('categoriasDeportes', $categoriasDeportes);

    }
}
