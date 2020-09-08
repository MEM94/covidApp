<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FillDataApiController extends Controller
{
    public function index(Request $request){

        // Create a client and provide a base URL
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://coronavirus-19-api.herokuapp.com/countries');
        // >>> {"type":"User", ...
        $response = json_decode($res->getBody()->getContents());
        $countryName = $request->get('name');

        //Check If Country Name exit
        foreach($response as $item){
            if($item->country == $countryName)
            return response()->json($item);//Then sent this data to ajax success
        }

        return response()->json(['error' => 'Country does not exist, Please choose another one'], 404);
    }
}
