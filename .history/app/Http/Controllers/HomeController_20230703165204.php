<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function getData()
    {
        $response = Http::get('http://localhost:8080/api/cars');
        $cars = json_decode($response, true);
        
        return view('Home.landing.homepage', ['Cars' => $cars['Cars']]);
    }

    public function getDataPricing()
    {
        $response = Http::get('http://localhost:8080/api/cars');
        $cars = json_decode($response, true);
        
        return view('Home.landing.homepage', ['Cars' => $cars['Cars']]);
    }
}
