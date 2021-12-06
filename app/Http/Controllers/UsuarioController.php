<?php

namespace App\Http\Controllers;
//use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends ApiController
{
    /*/public function ingresar(Request $request)
    {
        //validar existencia de ci y puerta
        $ingreso = new UserIngresado();
        $ingreso->ci = $request->input('ci');
        $ingreso->codigoPuerta = $request->input('codigoPuerta');
        $ingreso->save();
    }
    */
    public function registrarse(Request $request)
    {
        //codigo de 4 digitos
        //validar ci y mail 
        $user = new User();
        $user->ci = $request->input('ci');
        $user->pin = $request->input('pin');
        $user->mail = $request->input('mail');
        $user->save();
    }
}
