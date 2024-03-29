<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Producto;
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
// Route::get('/pruebas' ,function(){

//     Producto::where('id','=','2')->delete();

// });
//buscador
Route::post('buscador', [\App\Http\Controllers\ProductoController::class, 'buscador'])->name('producto.busqueda');
//tickets comprador
Route::get('/mostrartickets', [\App\Http\Controllers\VentaController::class, 'mostrartickets'] )->name('mostrartickets');
//productos comprador mostrar todos
Route::get('/mostrarproductos', [\App\Http\Controllers\ProductoController::class, 'mostrarproductos'] )->name('mostrarproductos');
//formulario con la modificacion con el producto
 Route::get('/formulariomodificar/{producto}/edit', [\App\Http\Controllers\ProductoController::class, 'edit'] )->name('producto.edit');
 Route::put('productos/{producto}', [\App\Http\Controllers\ProductoController::class, 'update'])->name('producto.update');
 //formulario para vender ropa
 Route::get('venderopa', [\App\Http\Controllers\ProductoController::class, 'venderopa'])->name('venderopa');
 Route::post('productos', [\App\Http\Controllers\ProductoController::class, 'store'])->name('producto.store');
 //formulario para subir valoracion, la primera envia desde user productos
 Route::get('formulariovaloracion', [\App\Http\Controllers\ValoracionController::class, 'formulariovaloracion'])->name('formulariovaloracion');
 Route::post('valoraciones', [\App\Http\Controllers\ValoracionController::class, 'store'])->name('valoracion.store');
 Route::get('listavaloraciones', [\App\Http\Controllers\ValoracionController::class, 'listavaloraciones'])->name('listavaloraciones');
 //envios
Route::get('/envios/{producto}', [\App\Http\Controllers\VentaController::class, 'productoEnvio'] )->name('productoEnvio');
//categorias
Route::get('/productosMasc/{categoria}', [\App\Http\Controllers\ProductoController::class, 'productosHombre'] )->name('productosMasc');
Route::get('/productosFem/{categoria} ', [\App\Http\Controllers\ProductoController::class, 'productosMujer'] )->name('productosFem');
 Route::get('graciasCompra/{item}', [\App\Http\Controllers\VentaController::class, 'insertDelete'] )->name('insertDelete');
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


//RUTE TENDENCIAS
Route::get('tendencias', function () {
    return view('tendencias');
})->name('tendencias');
//RUTE SOBRE NOSOTROS
Route::get('sobrenosotros', function () {
    return view('sobrenosotros');
})->name('sobrenosotros');
//RUTE DE PANEL DE USUARIO
Route::get('/profile', function () {
    return view('profile.show');
})->name('panelUsuario');

//APIS
//api asos
Route::get('/ropaASOS', function () {
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




