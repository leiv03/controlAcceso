<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/registro', [App\Http\Controllers\UsuarioController::class, "registrarse"]);
Route::post('/login', [App\Http\Controllers\UsuarioController::class, "login"]);
Route::post('/IngresarPuerta', [App\Http\Controllers\PuertaController::class, "ingresarPuerta"]);
