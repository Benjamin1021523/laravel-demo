<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FirstController extends Controller
{
    /**
     * First web
     */
    public function index()
    {
        return 'hello Laravel!';
    }

    public function api(Request $request) {
        $client = new Client();
        $who = 27298;
        $dataId = 'Data-33180';
        $url = "http://127.0.0.1:8080/getSaved?who={$who}&dataId={$dataId}";
        $result = $client->get($url);
        return $result->getBody()->getContents();
    }
}
