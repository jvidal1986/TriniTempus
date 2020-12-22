<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
class UserController extends Controller
{
    public function mostrarFormulario(){
        return view("registro.registro");
    }
    public function registrarUsuario(Request $request){
        $user =new User();
        $user->name=$request->introducir_nombre;
        $user->apellidos=$request->introducir_apellidos;
        $user->telefono=$request->introducir_telefono;
        $user->email=$request->introducir_email;
        $user->ciudad=$request->ciudad;
        $user->password=$request->Repetir_contraseña;

        $user->password= bcrypt($request->password);
        $user->save();
        return view('index')->with('notice','usuario registrado. Logeate');

    }
}
