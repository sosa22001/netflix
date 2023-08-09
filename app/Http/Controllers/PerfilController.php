<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function renderizarPerfiles($idUsuario){
        return view('perfil.mostrarPerfiles');
    }
}
