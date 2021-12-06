<?php

namespace App\Http\Controllers;
//use Validator;
use Illuminate\Http\Request;

class UsuarioController extends ApiController
{
    public function login(Request $request)
    {
        $user = new User;
        $user->codigoPuerta = $request->input('codigoPuerta');
        $user->nombre = $request->input('nombre');
        $user->descripcion = $request->input('descripcion');
        $user->geolocalizacion = $request->input('geolocalizacion');
        $user->fecha = $request->input('fecha');
        $user->save();

    }
    public function registrarse(Request $request)
    {
        $user = new User;
        $user->ci = $request->input('ci');
        $user->pin = $request->input('pin');
        $user->mail = $request->input('mail');
        $user->save();
    }
}
