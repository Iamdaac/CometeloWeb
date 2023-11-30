<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function mostrarPerfil()
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Obtiene los detalles del usuario autenticado
            $usuario = Auth::user();
            return view('perfil', compact('usuario'));
        } else {
            // Si el usuario no está autenticado, redirige al login o a otra página
            return redirect('/login')->with('error', 'Debes iniciar sesión para ver tu perfil');
        }
    }

    public function actualizarPerfil(Request $request)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Lógica para actualizar el perfil del usuario
            // Accede a los datos del formulario mediante $request->input('campo');

            // Luego de actualizar, redirige a la vista del perfil
            return redirect('/perfil')->with('success', 'Perfil actualizado correctamente');
        } else {
            // Si el usuario no está autenticado, redirige al login o a otra página
            return redirect('/login')->with('error', 'Debes iniciar sesión para actualizar tu perfil');
        }
    }
}

