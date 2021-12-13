<?php

namespace App\Http\Controllers;
//use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\prueba;
use Illuminate\Support\Facades\Validator;


class UsuarioController extends ApiController
{
    public function registrarse(Request $request)
    {
        //codigo de 4 digitos
        //validar ci y mail
        $validatedData = Validator::make($request->all(), [
            'ci' => 'required|unique:usuario,ci|max:9',
            'pin' => 'required|max:4',
            'mail' => 'required|unique:usuario,mail|email'
        ]);
        
        if ($validatedData->fails())
        {
            return($this->sendError("ci, mail o pin incorrectos", [], 400));
        }

        $user = new User();
        $user->ci = $request->input('ci');
        $user->pin = $request->input('pin');
        $user->mail = $request->input('mail');
        $user->save();

        $mail = new prueba;
        Mail::to($user->mail)->send($mail);
        return($this->sendResponse([], "Se ha creado su cuenta correctamente", 200));
    }
}
