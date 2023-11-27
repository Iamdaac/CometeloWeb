<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
define ("USUARIO", 1000);
define ("RESTAURANTE", 1100);
class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->input('nombre') . " " . $request->input('apellido'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => USUARIO, 
        ]);

        // Lógica para iniciar sesión automáticamente después del registro si lo deseas

        return redirect('/login'); // Redirigir a la página principal o a donde prefieras
    }
}
