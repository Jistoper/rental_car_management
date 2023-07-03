<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }

    public function getall()
    {
        $response = Http::get('http://localhost:8080/api/cars');
        $cars = json_decode($response, true);

        return view('Admin.content.car.cartable', ['Cars' => $cars['Cars']]);
    }
    
}
