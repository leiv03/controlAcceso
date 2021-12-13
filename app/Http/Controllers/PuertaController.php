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

        //obtengo la data del request y la guardo en las variables
        $puerta = new Puerta();
        $puerta->nombre = $request->input('nombre');
        $puerta->descripcion = $request->input('descripcion');
        $puerta->geolocalizacion = $request->input('geolocalizacion');
        $puerta->save();

        return($this->sendResponse([], "Se ha creado la puerta correctamente", 200));
    }

    public function ingresarUsuario(Request $request){

        //valido dos variables del request 
        $validatedData = Validator::make($request->all(), [
            'ci' => 'required|max:9|exists:usuario,ci',
            'codigoPuerta' => 'required|max:4|exists:puerta,codigoPuerta',
        ]);
        //en caso de que falle tira error 
        if ($validatedData->fails())
        {
            return($this->sendError("ci o pin incorrectos", [], 400));
        }

        $ingreso = new UserIngresado();
        $ingreso->ci= $request->input('ci');
        $ingreso->codigoPuerta= $request->input('codigoPuerta');
        $ingreso->save();

        $usuario = User::find($ingreso->ci);
        Mail::to($usuario->mail)->send(new iU($ingreso->codigoPuerta));
        return($this->sendResponse([], "Ingreso correctamente", 201));
    }
}
