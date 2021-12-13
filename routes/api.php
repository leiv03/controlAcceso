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
Route::post('/entrando', [App\Http\Controllers\UsuarioController::class, "usuarioEntrando"]);
Route::post('/crearPuerta', [App\Http\Controllers\PuertaController::class, "ingresarPuerta"]);
Route::post('/ingresar', [App\Http\Controllers\PuertaController::class, "ingresarUsuario"]);


