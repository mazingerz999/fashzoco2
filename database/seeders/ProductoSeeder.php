<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class ProductoSeeder extends Seeder
{
    // private $productos = array(
    //     array(
    //         'marca' => 'Nike',
    //         'modelo' => 'TN',
    //         'cantidad' => '1',
    //         'precio' => 'rand(10,200)',
    //         'sexo' => 0,
    //         'fechaFabricacion' => '2022-05-03',
    //         'imagen' => null,
    //                 )
    // );
    private function zc4($request)
    {
        $array = [];
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
            CURLOPT_POSTFIELDS => "[\n\t{\n\t\t\"facetField\": \"zc4\",\n\t\t\"values\": [\n\t\t\t\"$request\"\n\t\t]\n\t}\n\t\n]",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: zappos1.p.rapidapi.com",
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
                "content-type: application/json"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $zapatosGolf = json_decode($response);
            $zapatosGolf->results;
            for ($i = 0; $i < count($zapatosGolf->results); $i++) {
                $array[$i] = $zapatosGolf->results[$i];
            }
            return $array;
        }
    }
    private function zc2($request)
    {
        $array = [];
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
            CURLOPT_POSTFIELDS => "[
        \t{
        \t\t\"facetField\": \"zc2\",
        \t\t\"values\": [
        \t\t\t\"$request\"
        \t\t]
        \t}
        \t
        ]",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: zappos1.p.rapidapi.com",
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $Umbrellas = json_decode($response);
            $Umbrellas->results;
            for ($i = 0; $i < count($Umbrellas->results); $i++) {
                $array[$i] = $Umbrellas->results[$i];
            }
            return $array;
        }
    }
    private function zc1($request)
    {
        $array = [];
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
            CURLOPT_POSTFIELDS => "[
        \t{
        \t\t\"facetField\": \"zc1\",
        \t\t\"values\": [
        \t\t\t\"$request\"
        \t\t]
        \t}
        \t
        ]",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: zappos1.p.rapidapi.com",
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $Umbrellas = json_decode($response);
            $Umbrellas->results;
            for ($i = 0; $i < count($Umbrellas->results); $i++) {
                $array[$i] = $Umbrellas->results[$i];
            }
            return $array;
        }
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ROPA/////////////////////////////////////
        //
        foreach ($this->zc2('Shirts & Tops') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
            $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(1)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Sweaters') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
             $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(2)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Jeans') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(3)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Hoodies & Sweatshirts') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(4)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Pants') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(5)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Shorts') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(6)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Underwear & Intimates') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(7)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Coat & Outerwear') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(8)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Dresses') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(9)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //ZAPATOS/////////////////////////////////////
        //
        foreach ($this->zc2('Boat Shoes') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(10)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Hiking') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(11)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Insoles & Accessories') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(12)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Loafers') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(13)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Clogs') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(14)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Sandals') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(15)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Sneakers & Athletic Shoes') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(16)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Oxford') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(17)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Boots') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(18)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //
        foreach ($this->zc2('Crib Shoes') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(19)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //gafas
        foreach ($this->zc2('Sunglasses') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(20)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //bolsos y maletas
        foreach ($this->zc1('Bags') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(21)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //sombreros
        foreach ($this->zc2('Hats') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(22)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //cinturones
        foreach ($this->zc2('Belts') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(23)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //relojes
        foreach ($this->zc1('Watches') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(24)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //gafas AZULES
        foreach ($this->zc1('Eyewear') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(25)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //accesorios tec
        foreach ($this->zc1('Electronics') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(26)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //bisuteria
        foreach ($this->zc2('Cufflinks') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(27)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //carteras
        foreach ($this->zc2('Ties & Pocket Squares') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(28)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //corbatas
        foreach ($this->zc1('Beauty') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(29)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //bufandas
        foreach ($this->zc2('Scarves') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(30)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //guantes
        foreach ($this->zc2('Gloves') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(31)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //mascarillas
        foreach ($this->zc2('Face Covers and Personal Protection') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(32)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //LLENO PARAGUAS
        foreach ($this->zc2('Umbrellas') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(33)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //cordones
        foreach ($this->zc2('Shoe Laces and Accents') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(34)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //DEPORTES/////////////////////////////////////////////////

        //running
        foreach ($this->zc2('Exercise & Fitness') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(35)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //surf
        foreach ($this->zc2('Swim & Surf') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(36)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //equipaciones
        foreach ($this->zc2('Team Sports') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(37)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //escalada
        foreach ($this->zc2('Climbing') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(38)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //ciclismo
        foreach ($this->zc2('Cycling') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(39)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        //skate
        foreach ($this->zc2('Skate') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(40)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);

            $a->save();
        }
        //golf
        foreach ($this->zc2('Golf') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating + 1;
            $a->precio = rand(10, 200);
            $random = rand(0, 1) == 1;
                       $a->sexo = $random;
            $a->vendido = 0;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::inRandomOrder()->where('escomprador', '=', '0')->first()->id;
            $a->categoria_id = Categoria::find(41)->id;
            $a->imagen = null;
            $a->envio_id = rand(1,6);
            $a->save();
        }
        // foreach ($this->productos as $producto) {
        //     $b = new Producto();
        //     $a->marca = $producto['marca'];
        //     $a->modelo = $producto['modelo'];
        //     $a->cantidad = $producto['cantidad'];
        //     $a->precio = $producto['precio'];
        //     $a->sexo = $producto['sexo'];
        //     $a->fechaFabricacion = $producto['fechaFabricacion'];
        //      $a->user_id = User::where('escomprador','=', '0')->random()->id;
        //     $a->categoria_id = Categoria::find(16)->id;
        //     $a->imagen = $producto['imagen'];
        //     $a->save();
        // }


        $this->command->info('Tabla productos inicializada con datos');
    }
}
