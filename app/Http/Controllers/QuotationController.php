<?php

namespace App\Http\Controllers;
#import config

use GuzzleHttp\Client;
use http\Client\Request;

class QuotationController extends Controller
{
    public function getCars()
    {
        /*$url = config('services.appServer.app_token');*/
        $client = new Client(); //GuzzleHttp\Client
        $url = "http://188.166.123.24:5001/get_cars";

        /*$response = Http::get('http://188.166.123.24:5001/get_cars');*/


        #$url= config["appServer"]."/get-cars"

        $response = $client->request('GET', $url, [
            'verify' => false,
        ]);


        $responseBody = json_decode($response->getBody());
        /*dd('$responseBod', $responseBody);*/

        return view('quotations.private-motor-quotation', compact('responseBody'));
    }

    public function motorSaveQoute(Request $request)
    {
        /*$url = config('services.appServer.app_token');*/
        $client = new Client(); //GuzzleHttp\Client
        $url = "http://188.166.123.24:5001/motor-save-quote2";


        $response = $client->request('POST', $url, [
            'verify' => false,

        ]);

        $motorPrivateArray = array(
            "vehicleValue" => "vehicleValue",
            "vehicleID" => "vehicleID",
            "yom" => "yom"
        );

        /*$motorPrivateArray = array();
        $motorPrivateArray['vehicleValue'] = $vehicleValue;
        $motorPrivateArray['vehicleID'] = $vehicleID;
        $motorPrivateArray['yom'] = $yom;

        $response = $client->post('url', [
            'json' => $motorPrivateArray,
        ]);*/

        /*
         * validate inputs
         *
         * create an associative array
         * {"vehicleValue":"request["vehivleid"]",
            "vehicleID":"request["vehiclemake"]",
            "yom":"request["yopm"]"
            }*
        - Pass it as an arguement to your call

        */


        $responseBody = json_decode($response->getBody());


        return view('quotations.private-motor-quotations-results', compact('responseBody'));
    }


}
