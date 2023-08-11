<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PerfilController extends Controller
{

    //obtiene todos los perfiles dado un usuario
    public function obtenerPerfiles($idUsuario, Request $request) {
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $body = '{
            "correo": "' . $request->input('email') . '",
            "contrasena": "' . $request->input('contraseña') . '"
        }';
       
        $resultado = $cliente->get("http://localhost:8080/api/perfil/perfiles/4", [
            'headers' => $headers,
            'body' => $body
        ]);
               
        // en perfiles espero un arreglo
        $perfiles = json_decode($resultado->getBody());
        
        return $perfiles;
    }

    public function obtenerPerfil($idPerfil){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->get("http://localhost:8080/api/perfil/cambiar/estado/{$idPerfil}", [
            'headers' => $headers,
        ]);
               
        $perfil = json_decode($resultado->getBody());
        
        return $perfil;
    }

    public function obtenerUsuario($idPerfil){

    }




    //renderiza los perfiles y obtiene los perfiles de la funcion -> obtenerPerfiles
    public function mostrarPerfiles($idUsuario, Request $request) {
        $perfiles = $this->obtenerPerfiles($idUsuario, $request);
        
        return view('perfil.mostrarPerfiles', compact('perfiles'));
    }

    //renderiza la pagina PIN del perfil
    public function mostrarPIN($idPerfil){
        return view('perfil.autenticarPerfil', compact('idPerfil'));
    }


    public function verificarPerfil($idPerfil, Request $request){
        $perfil = $this->obtenerPerfil($idPerfil);

        //comparamos contrasenias
        if($perfil->contraseniaperfil == $request->input('pin')){
            return view('usuario.inicio');
        } else {
            return redirect()->route('perfil.formulario', ['idPerfil' => $idPerfil])  ->with('mensaje', 'PIN incorrecto, por favor intenta nuevamente.');
        }
    }
    
    public function mostrarInicio(){
        return view('usuario.inicio');
    }

    public function mostrarCuenta(){
        return view('usuario.cuenta');
    }

    public function mostrarAyuda(){
        return view('usuario.ayuda');
    }

    

    

}
