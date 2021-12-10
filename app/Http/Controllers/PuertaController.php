<?php

namespace App\Http\Controllers;
use App\Models\UserIngresado;
use Illuminate\Http\Request;
use App\Models\Puerta;
use Mail;
use App\Mail\iU;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class PuertaController extends ApiController
{
    public function IngresarPuerta(Request $request)
    {
        $puerta = new Puerta();
        $puerta->nombre = $request->input('nombre');
        $puerta->descripcion = $request->input('descripcion');
        $puerta->geolocalizacion = $request->input('geolocalizacion');
        $puerta->save();

        return($this->sendResponse([], "Se ha creado la puerta correctamente", 200));
    }

    public function ingresarUsuario(Request $request){

        $validatedData = Validator::make($request->all(), [
            'ci' => 'required|max:9',
            'codigoPuerta' => 'required|max:4',
        ]);
        
        if ($validatedData->fails())
        {
            return($this->sendError("ci o pin incorrectos", [], 400));
        }

        $ingreso = new UserIngresado();
        $ingreso->ci= $request->input('ci');
        $ingreso->codigoPuerta= $request->input('codigoPuerta');
        $ingreso->save();

        $mail = new iU;
        $usuario = User::find($ingreso->ci);
        Mail::to($usuario->mail)->send($mail);
        return($this->sendResponse([], "Ingreso correctamente", 201));
    }
}
