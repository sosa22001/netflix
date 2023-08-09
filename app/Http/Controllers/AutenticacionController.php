<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacionController extends Controller
{
    public function mostrarLogin(){
        return view('login.inicio-sesion');
    }

    public function verificacion(Request $request){
        //al verificar con el backend
        //si todo está bien
        //lo redirijo a los perfiles.
        return $request;
    }

    public function mostrarRegistro(){
        return view('login.registro');
    }
}
