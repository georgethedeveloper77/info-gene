<?php

namespace App\Http\Controllers;
#import config

use Exception;
use GuzzleHttp\Client as Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Redirect;

#use http\Client\Request;

class QuotationController extends Controller
{
    public function getCars()
    {
        try {
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
        } catch (ClientException $e) {
            echo Psr7\Message::toString($e->getRequest());
            echo Psr7\Message::toString($e->getResponse());
        } catch (Exception $exception) {
            $responseBody = [];
            return view('quotations.private-motor-quotation', compact('responseBody'))->withErrors(['msg' => 'Errror processing  Qoutation . Please try Again']);
        }

        return view('quotations.private-motor-quotation', compact('responseBody'));
    }

    public function motorSaveQoute(Request $request)
    {
        try {
            $client = new Client(['http_errors' => false]); //GuzzleHttp\Client
            $url = "http://188.166.123.24:5001/motor-save-quote2";


            $motorPrivateArray = array(
                "vehicleValue" => $request->vehicleValue,
                "vehicleID" => $request->make,
                "yom" => $request->yom
            );
            //echo "\r\n motorPrivateArray ".json_encode($motorPrivateArray);

            $response = $client->post($url, [
                'json' => $motorPrivateArray,
            ]);

            #$content=(string)$response->getBody()->__toString();

            $content = (string)$response->getBody()->getContents();
            $content = trim($content);
            #$contents2=$response->json();
            #dd($content);


            #$content= trim($content);
            $responseBody = json_decode($content, true);

        } catch (ClientException $e) {
            echo Psr7\Message::toString($e->getRequest());
            echo Psr7\Message::toString($e->getResponse());
        } catch (Exception $exception) {
            #dd()
            return Redirect::back()->withErrors(['msg' => 'Errror processing  Qoutation . Please try Again']);
        }
        #echo "<br>"."\r\n Make - " .$request->make;
        #echo "<br>"."\r\n Value - " .$request->vehicleValue;
        #echo "<br>"."\r\n yom - " .$request->yom;

        #echo "<br>json lst error -".json_last_error();

        #dd($content);
        #dd($responseBody );

        return view('quotations.private-motor-quotations-results2', compact('responseBody'));
    }


}
