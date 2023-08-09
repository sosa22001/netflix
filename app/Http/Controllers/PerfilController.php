<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrarPerfiles($idUsuario){
        return view('perfil.mostrarPerfiles');
    }

    public function mostrarLogin($idUsuario, $idPerfil){
        return view('perfil.autenticarPerfil');
    }

    public function verificarPerfil($idUsuario, $idPerfil){
        return view('usuario.home');
    }


}
