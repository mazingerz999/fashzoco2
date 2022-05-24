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
    //         'precio' => '25',
    //         'sexo' => 0,
    //         'fechaFabricacion' => '2022-05-03',
    //         'imagen' => null,
    //                 )
    // );
    private function zc4($request){
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
             CURLOPT_POSTFIELDS => "[\n\t{\n\t\t\"facetField\": \"zc4\",\n\t\t\"values\": [\n\t\t\t\"$request\"\n\t\t]\n\t}\n\t\n]",
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
     }
     private function zc2($request){
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
             $Umbrellas= json_decode($response);
             $Umbrellas->results;
             for ($i=0; $i < count($Umbrellas->results); $i++) {
                 $array[$i]=$Umbrellas->results[$i];
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
        //LLENO GOLF
        foreach ($this->zc4('Golf Shoes') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating+1;
            $a->precio = 25;
            $random = rand(0,1) == 1;
            $a->sexo = $random;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::all()->random()->id;
            $a->categoria_id = Categoria::find(41)->id;
            $a->imagen = null;
            $a->save();
        }
        //LLENO PARAGUAS
        foreach ($this->zc2('Umbrellas') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating+1;
            $a->precio = 25;
            $random = rand(0,1) == 1;
            $a->sexo = $random;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::all()->random()->id;
            $a->categoria_id = Categoria::find(33)->id;
            $a->imagen = null;
            $a->save();
        }
        foreach ($this->zc2('Belts') as $producto) {
            $a = new Producto();
            $a->marca = $producto->brandName;
            $a->modelo = $producto->productName;
            $a->cantidad = $producto->reviewRating+1;
            $a->precio = 25;
            $random = rand(0,1) == 1;
            $a->sexo = $random;
            $timestamp = mt_rand(1, time());
            $randomDate = date("y-m-d", $timestamp);
            $a->fechaFabricacion = $randomDate;
            $a->user_id = User::all()->random()->id;
            $a->categoria_id = Categoria::find(23)->id;
            $a->imagen = null;
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
        //     $a->user_id = User::all()->random()->id;
        //     $a->categoria_id = Categoria::find(16)->id;
        //     $a->imagen = $producto['imagen'];
        //     $a->save();
        // }


        $this->command->info('Tabla productos inicializada con datos');
     }



}
