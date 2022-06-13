<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categoria;
use App\Models\envio;
use Illuminate\Support\Facades\Auth;
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
    public function boot() {

        $todosenvios = envio::all();

        View::share('todosenvios', $todosenvios);

        $todasCategorias = Categoria::all();

        View::share('todasCategorias', $todasCategorias);

       $categoriasropa = Categoria::take(9)->get();

View::share('categoriasRopa', $categoriasropa);

       $categoriasZapatos = Categoria::skip(9)->take(10)->get();

       View::share('categoriasZapatos', $categoriasZapatos);

        $categoriasAccesorios= Categoria::skip(19)->take(15)->get();

View::share('categoriasAccesorios', $categoriasAccesorios);

       $categoriasDeportes= Categoria::skip(34)->take(9)->get();

       View::share('categoriasDeportes', $categoriasDeportes);


    $imagenQR=null;
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://qr-generator-api.p.rapidapi.com/api/qrcode/generate?text=enter-your-text-here&foreColor=%23000000&backColor=%23ffffff&pixel=10",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: qr-generator-api.p.rapidapi.com",
		"X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {

} else {

	$imagenQR=json_decode($response);
}
View::share('imagenQR', $imagenQR);


    }
}
