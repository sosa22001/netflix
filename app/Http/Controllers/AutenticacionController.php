<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AutenticacionController extends Controller
{

    //LOGIN FUNCIONES
    public function mostrarLogin(){
        return view('login.inicio-sesion');
    }

    public function verificarUsuario(Request $request){
        //al verificar con el backend
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body = '{
            "correo": "' . $request->input('email') . '",
            "contrasena": "' . $request->input('contraseña') . '"
        }';

        $resultado = $cliente->get('http://localhost:8080/api/usuario',[
            'headers' => $headers,
            'body' => $body
        ]);
        
        $usuario = json_decode($resultado->getBody(),true);

        if($usuario ==null){
            return redirect()->route('login.formulario')->with('mensaje', 'Oops! No pudimos encontrar tu cuenta');
        }else{
            return redirect()->route('perfiles.mostrar', ['idUsuario' => $usuario['idUsuario']]);

        }
        
    }

    public function mostrarRegistro(){
        return view('login.registro');
    }

    public function formularioRegistro(Request $request){
        //recibo la información

        //vista de los planes:
        return view('plan.planes', compact('request'));
    }

}
