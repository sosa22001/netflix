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

    public function obtenerPlanes(){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->get("http://localhost:8080/api/planes/obtener", [
            'headers' => $headers,
        ]);

        $planes = json_decode($resultado->getBody());
        
        return $planes;

    }

    public function mostrarRegistro(){
        return view('login.registro');
    }

    public function formularioRegistro(Request $request){

        $planes = $this->obtenerPlanes();

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

        return view('plan.planes', compact('informacion', 'planes'));
    }

    public function formularioPlanes(Request $request){

        $informacionUsuarioPlan = $request;

        return view('tarjeta.crearTarjeta', compact('informacionUsuarioPlan'));
    }

    public function crearPerfil($idUsuario){
        return view('login.crearPerfil', compact('idUsuario'));
    }

    public function crearTarjeta(Request $request){
        $informacion = $request;

        return view('login.crearPerfil', compact('informacion'));
    }

    //Reune todos los inputs de los formularios anteriores y crea el usuario
    public function crearUsuario(Request $request){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $usuario = [ 
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "correo" => $request->input('correo'),
            "contrasena" => $request->input('contrasenia'),
            "plan" => [
                "idPlan" => $request->input('idPlan'),
            ], 
            "tarjeta" => [
                "numeroTarjeta" => $request->input('numeroTarjeta'),
                "cvv" => $request->input('cvv'),
                "fechaVencimiento" => $request->input('fecha')
            ],
            "perfiles" => [
                "nombre" => $request->input('nombrePerfil'),
                "contraseniaperfil" => $request->input('psw'),
                "imagen" => $request->input('icono')
            ]
        ];

        $jsonBody = json_encode($usuario);
        $resultado = $cliente->post('http://localhost:8080/api/usuario/crear',[
            'headers' => $headers,
            'body' => $jsonBody
        ]);

        $resultadoBackend = json_decode($resultado->getBody(),true);

        return $resultadoBackend;

/*         return redirect()->route('perfiles.mostrar', ['idUsuario' =>]);
 */    }

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
        ];

        $jsonBody = json_encode($body);
        $resultado = $cliente->post('http://localhost:8080/api/usuario/crear',[
            'headers' => $headers,
            'body' => $jsonBody
        ]);


        $resultadoBackend = json_decode($resultado->getBody()->getContents());
   
        return view('login.crearPerfil', compact('resultadoBackend'));
     }

     //crea el primer perfil del usuario despues de que se haya registrado
    
     public function guardarPerfil(Request $request){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body = [
            'nombre' => $request->input('nombrePerfil'),
            'contraseniaperfil' => $request->input('psw'),
            'imagen' => $request->input('icono'),
        ];

  
        $resultado = $cliente->post("http://localhost:8080/api/perfil/crear/{$request->input('idUsuario')}", [
            'headers' => $headers,
            'body' => json_encode($body)
        ]);
               
        // retorna el perfil creado
        $perfil = json_decode($resultado->getBody());

        //obtiene los perfiles para mandarlos a la vista
        $perfiles = $this->obtenerPerfiles($request->input('idUsuario'));
        
        return redirect()->route('perfiles.mostrar', ['idUsuario' => $request->input('idUsuario')]);
    }

    public function obtenerPerfiles($idUsuario) {
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        //los perfiles
        $resultado = $cliente->get("http://localhost:8080/api/perfil/perfiles/{$idUsuario}", [
            'headers' => $headers,
        ]);

        // en perfiles espero un arreglo
        $perfiles = json_decode($resultado->getBody());
        
        return $perfiles;
    }
}