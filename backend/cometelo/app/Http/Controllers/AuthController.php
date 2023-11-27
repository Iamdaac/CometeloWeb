<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator) // Enviar los errores a la vista
                ->withInput($request->except('password')); // Mantener el correo electrónico en el formulario
        }

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la autenticación es exitosa, redirigir a alguna página
            return redirect('/');
        } else {
            // Si la autenticación falla, redirigir de vuelta al formulario de login con un mensaje de error
            return redirect('/login')->with('error', 'Credenciales inválidas')->withInput($request->except('password'));
        }
    }


    public function logout()
    {
        Auth::logout();
        // Redirigir a la página de inicio, login, o a donde prefieras después del logout
        return redirect('/login');
    }
}