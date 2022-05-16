<?php

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
//api buscador
Route::get('/ropaZappos', function (Request $request) {
    $curl = curl_init();
    $request="adidas";
    $url = "https://zappos1.p.rapidapi.com/products/list?limit=100&page=1&sort=relevance%2Fdesc&query=$request";
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: zappos1.p.rapidapi.com",
            "X-RapidAPI-Key: b73e3c56bamsh7c33431a69d060dp16ab26jsnc57335704b4f",
            "content-type: application/json"
        ],
    ]);
    curl_setopt($curl, CURLOPT_URL, $url);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $todo = null;

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {

        $todo=json_decode($response);
        $ropaArray=$todo->results;
    return view('tienda.zappos', compact('ropaArray'));
}
})->name('ropaZappos');


//ruta para el buscador
 Route::post('autocomplete', [\App\Http\Controllers\Busca::class, 'buscar'])->name('autocompletado');

