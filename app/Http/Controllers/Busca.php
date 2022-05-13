<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Busca extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://zappos1.p.rapidapi.com/products/list?limit=100&page=1&sort=relevance%2Fdesc&query=$request",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "[\n\t{\n\t\t\"facetField\": \"zc1\",\n\t\t\"values\": [\n\t\t\t\"Clothing\"\n\t\t]\n\t},\n\t{\n\t\t\"facetField\": \"zc2\",\n\t\t\"values\": [\n\t\t\t\"Swimwear\",\n\t\t\t\"Underwear & Intimates\"\n\t\t]\n\t},\n\t{\n\t\t\"facetField\": \"txAttrFacet_Gender\",\n\t\t\"values\": [\n\t\t\t\"Women\",\n\t\t\t\"Girls\"\n\t\t]\n\t}\n]",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: zappos1.p.rapidapi.com",
		"X-RapidAPI-Key: b73e3c56bamsh7c33431a69d060dp16ab26jsnc57335704b4f",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$todo=null;

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {

    $todo=json_decode($response);
    $ropaArray=$todo;
    return view('tienda.Taobao', compact('ropaArray'));
}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
