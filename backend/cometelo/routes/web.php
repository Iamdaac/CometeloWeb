<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantesController;



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
Route::get('/logout', [AuthController::class, 'logout']);
