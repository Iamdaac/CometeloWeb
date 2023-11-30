<?php

namespace App\Http\Controllers;
use App\Models\Reservacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReservaController extends Controller
{
    //
    public function crearReserva(Request $request){
        $usuario = Auth::user();
        $fecha = Carbon::createFromFormat('m/d/Y', $request->input('fecha'))->toDateString();
        $reserva = Reservacion::create([
            'id_cliente' => $usuario->id,
            'id_restaurante' => $request->input('restauranteid'),
            'fecha' => $fecha,
            'hora' => $request->input('hora'),
            'cantidad' => $request->input('cantidad'),
            'estado' => "Activa",
            'comentario' => "",
        ]);
        if($reserva){
            return response()->json(['message' => 'Reserva creada exitosamente'], 201);
        } else {
            return response()->json(['message' => 'Error al crear la reserva'], 500);
        }
        dd($request);
    }
}
