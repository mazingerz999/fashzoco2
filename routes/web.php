<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//RUTA INICIAL ME LLEVA AL LOGIN
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'] )->name('home');
Route::get('/pruebas' ,function(){
   $aux=null;
   $array=[];
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://zappos1.p.rapidapi.com/products/list?limit=20&page=1&sort=relevance%2Fdesc",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "[\n\t{\n\t\t\"facetField\": \"zc4\",\n\t\t\"values\": [\n\t\t\t\"Golf Shoes\"\n\t\t]\n\t}\n\t\n]",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: zappos1.p.rapidapi.com",
            "X-RapidAPI-Key: b73e3c56bamsh7c33431a69d060dp16ab26jsnc57335704b4f",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $zapatosGolf= json_decode($response);
        $zapatosGolf->results;
        for ($i=0; $i < count($zapatosGolf->results); $i++) {
            $array[$i]=$zapatosGolf->results[$i];
        }
        return $array;
    }

});
Route::get('/productosMasc/{categoria}', [\App\Http\Controllers\ProductoController::class, 'productosHombre'] )->name('productosMasc');
Route::get('/productosFem/{categoria} ', [\App\Http\Controllers\ProductoController::class, 'productosMujer'] )->name('productosFem');
//RUTA QUE ME REDIRECCIONA DESPUES DE LOGUEARME
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');

});


//RUTE DE PANEL DE USUARIO
Route::get('/profile', function () {
    return view('profile.show');
})->name('panelUsuario');

//APIS
//api asos
Route::get('/ropaASOS', function () {
    // $ropa=Http::get('https://adidas7.p.rapidapi.com/products/reviews/G55366');
    // $ropaArray=$ropa->json();
    // //no olvides cambiar el index por la blade correspondiente
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://asos2.p.rapidapi.com/products/v2/list?limit=48&categoryId=4209&offset=0&store=US&lang=en-US&sizeSchema=US&currency=USD&sort=freshness&country=US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: asos2.p.rapidapi.com",
		"X-RapidAPI-Key: b73e3c56bamsh7c33431a69d060dp16ab26jsnc57335704b4f"
	],

]);
$ropa = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $todo=json_decode($ropa);
    $ropaArray=$todo->products;
    return view('tienda.asos', compact('ropaArray'));
}
    })->name('ropaASOS');
//apis
Route::get('/ropaZapposBuscador', [\App\Http\Controllers\Busca::class, 'busca'])->name('ropaZapposBuscador');
Route::get('/ropaZapposMujer', [\App\Http\Controllers\Busca::class, 'mujer'])->name('ropaZapposMujer');
Route::get('/ropaZapposHombre', [\App\Http\Controllers\Busca::class, 'hombre'])->name('ropaZapposHombre');
Route::get('/mapaTiendas', function(){
    return view('mapa');
})->name('mapaTiendas');




