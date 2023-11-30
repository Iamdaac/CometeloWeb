<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteInfoController extends Controller
{
    public function restauranteInfo($id){
        $restaurante = Restaurante::find($id);
        return view('restaurante', compact('restaurante'));
    }
}
