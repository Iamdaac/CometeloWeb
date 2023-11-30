<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class BController extends Controller
{
    public function buscar(Request $request)
    {
        $terminoBusqueda = $request->input('termino_busqueda');

        $restaurantes = Restaurante::where('nombre', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('tipo_comida', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('provincia', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('tipo_restaurante', 'like', '%' . $terminoBusqueda . '%')
            ->get();

        // Devolver los resultados a una vista
        return view('restaurantes', ['restaurantes' => $restaurantes]);
    }

    public function buscarAvanzado(Request $request)
    {
        // Obtener los valores seleccionados de los menús desplegabless
        $facilidades = $request->input('facilidades');
        $costo = $request->input('costo');

        // Realizar la búsqueda avanzada basada en los filtros seleccionados
        $restaurantes = Restaurante::join('restaurantefacilidad', 'restaurantefacilidad.restaurante_id', '=', 'restaurante.id')
        ->join('facilidad', 'facilidad.id', '=', 'restaurantefacilidad.facilidad_id')
        ->where('facilidad.descripcion', 'like', '%' . $facilidades . '%')
        ->where('restaurante.categoria_costo', 'like', '%' . $costo . '%')

        ->get();
        // Devolver los resultados a la vista
        return view('restaurantes', ['restaurantes' => $restaurantes]);
    }
}


