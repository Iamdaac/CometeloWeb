<?php

namespace App\Http\Controllers;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    //
    public function index()
    {
        $restaurante = Restaurante::all();
        return view('restaurantes', ['restaurantes' => $restaurante]);
    }
}
