<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Contacto;
class ContactoController extends Controller
{
    public function mostrarPaginaContacto(){

        return view('contacto.contacto');
    }

    public function registrarMensajeContacto(Request $request){
        $contacto =new Contacto();
        $contacto->name=$request->introducir_nombre;
        $contacto->email=$request->introducir_email;
        $contacto->telefono=$request->introducir_telefono;
        $contacto->email=$request->introducir_email;
        
        $contacto->asunto=$request->introducir_asunto;
        $contacto->mensaje=$request->introducir_mensaje;

        
        $contacto->save();
        return view('/contacto')->with('notice','Mensaje enviado. Gracias, le contestaremos lo antes posible');

    }
}
