<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Busca extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function busca(Request $request)
    {
        $curl = curl_init();
        $texto = trim($request->get('texto'));

        $url = "https://zappos1.p.rapidapi.com/products/list?limit=100&page=1&sort=relevance%2Fdesc&query=$texto";
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
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
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
            $ropaArray=$todo;
        return view('tienda.ZapposBuscador', compact('ropaArray', 'texto'));
    }
}
    public function mujer()
    {
        $curl = curl_init();
        $url = "https://zappos1.p.rapidapi.com/products/list?limit=100&page=1";
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
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
                "content-type: application/json"
            ],
            CURLOPT_POSTFIELDS => "[
                \t{
                \t\t\"facetField\": \"txAttrFacet_Gender\",
                \t\t\"values\": [
                \t\t\t\"Women\",
                \t\t\t\"Girls\"
                \t\t]
                \t}
                ]",
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
            $ropaArray=$todo;
        return view('tienda.ZapposMujer', compact('ropaArray'));
    }
}
    public function hombre()
    {
        $curl = curl_init();
        $url = "https://zappos1.p.rapidapi.com/products/list?limit=100&page=1";
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
                "X-RapidAPI-Key: 3c1be475cbmshd532ffd3a8fad6fp145b65jsnb4190ea3f54a",
                "content-type: application/json"
            ],
            CURLOPT_POSTFIELDS => "[
                \t{
                \t\t\"facetField\": \"txAttrFacet_Gender\",
                \t\t\"values\": [
                \t\t\t\"Men\",
                \t\t\t\"Boys\"
                \t\t]
                \t}
                ]",
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
            $ropaArray=$todo;
        return view('tienda.ZapposHombre', compact('ropaArray'));
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
