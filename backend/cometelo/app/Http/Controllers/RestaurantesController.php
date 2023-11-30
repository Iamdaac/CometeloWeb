<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    public function index()
    {
        $restaurantes = Restaurante::all();
        return view('restaurantes', ['restaurantes' => $restaurantes]);
    }

}
