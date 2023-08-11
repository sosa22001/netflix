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
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $correo = $request->input('correo');
        $contra = $request->input('contraseña');

        $informacion = [
            'nombre' =>$nombre,
            'apellido' =>$apellido,
            'correo'=>$correo,
            'contrasenia' =>$contra
        ];

        return view('plan.planes', compact('informacion'));
    }

    public function formularioPlanes(Request $request){

        $informacionUsuarioPlan = $request;

        return view('tarjeta.crearTarjeta', compact('informacionUsuarioPlan'));
    }

    public function store(Request $request){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body =[ 
            "nombre" =>$request->get('nombre'),
            "apellido" => $request->get('apellido'),
            "correo" =>$request->get('correo'),
            "contrasena" =>$request->get('contrasenia'),
            "idPlan" =>(int)$request->get('idPlan'),
            "numeroTarjeta" =>(int)$request->get('numeroTarjeta'),
            "cvv" =>(int)$request->get('cvv'),
            "fechaVencimiento" =>$request->get('fechaVencimiento'),
            "tipoTarjeta"=>$request->get('tipoTarjeta')
        ];

        $jsonBody = json_encode($body);
        $resultado = $cliente->post('http://localhost:8080/api/usuario/crear',[
            'headers' => $headers,
            'body' => $jsonBody
        ]);

        $resultadoBackend = json_decode($resultado->getBody(),true);
        return $resultadoBackend;
    }

}
