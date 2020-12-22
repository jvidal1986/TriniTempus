<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function mostrarPaginaOfertas(){

        return view('ofertas.ofertas');
    }
}
