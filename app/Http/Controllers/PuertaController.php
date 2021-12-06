<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuertaController extends ApiController
{
    public function IngresarPuerta(Request $request)
    {
        $puerta = new Puerta();
        $puerta->nombre = $request->input('nombre');
        $puerta->descripcion = $request->input('descripcion');
        $puerta->geolocalizacion = $request->input('geolocalizacion');
        $puerta->save();
    }
}
