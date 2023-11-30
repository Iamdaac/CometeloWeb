<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantesController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Response::view('home');
})->middleware('auth');
Route::get('/home', function () {
    return Response::view('home');
})->middleware('auth');
Route::get('/restaurantes', [RestaurantesController::class, 'index'])->middleware('auth');


// Auth
Route::get('/register', function (){
    return Response::view('register');
});
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', function (){
    return Response::view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
//logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); 

Route::get('/perfil', [PerfilController::class, 'mostrarPerfil'])->middleware('auth');
Route::post('/perfil/actualizar', [PerfilController::class, 'actualizarPerfil'])->middleware('auth')->name('perfil.actualizar');


//buscar restaurante

Route::get('/buscar', [BController::class, 'buscar']);
Route::get('/buscar_avanzado', [BController::class, 'buscarAvanzado'])->name('buscar_avanzado');



