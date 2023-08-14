<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PeliculaController ;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PerfilController extends Controller
{

    //obtiene todos los perfiles dado un usuario
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

    public function obtenerPerfil($idPerfil){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->get("http://localhost:8080/api/perfil/{$idPerfil}", [
            'headers' => $headers,
        ]);

        $perfil = json_decode($resultado->getBody());
        
        return $perfil;
    }

    public function obtenerUsuario($idUsuario){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->get("http://localhost:8080/api/usuario/{$idUsuario}", [
            'headers' => $headers,
        ]);

        $usuario = json_decode($resultado->getBody());
        
        return $usuario;
    }

    public function obtenerTarjeta($idTarjeta){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->get("http://localhost:8080/api/usuario/{$idUsuario}", [
            'headers' => $headers,
        ]);

        $usuario = json_decode($resultado->getBody());
        
        return $usuario;
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

    //renderiza los perfiles y obtiene los perfiles de la funcion -> obtenerPerfiles
    public function mostrarPerfiles($idUsuario) {
        $perfiles = $this->obtenerPerfiles($idUsuario);
        
        return view('perfil.mostrarPerfiles', compact('perfiles', 'idUsuario'));
    }

    //renderiza la pagina PIN del perfil
    public function mostrarPIN($idUsuario, $idPerfil){
        return view('perfil.autenticarPerfil', compact('idPerfil', 'idUsuario'));
    }

    public function verificarPerfil($idUsuario, $idPerfil, Request $request){
        $perfil = $this->obtenerPerfil($idPerfil);

        //comparamos contrasenias
        //si es correcta enviamos vista de inicio
        //si no es correcta le pedimos que vuelva a ingresar contrasenia
        if($perfil->contraseniaperfil == $request->input('pin')){
            return $this->mostrarInicio($idUsuario, $idPerfil);
        } else {
            return redirect()->route('perfil.formulario', ['idPerfil' => $idPerfil, 'idUsuario' => $idUsuario])->with('mensaje', 'PIN incorrecto, por favor intenta nuevamente.');
        }
    }
    
    public function mostrarInicio($idUsuario, $idPerfil){
        $perfil = $this->obtenerPerfil($idPerfil);
        $perfiles = $this->obtenerPerfiles($idUsuario);

        //obtenemos peliculas para enviarselas a la vista
        $peliculaController = new PeliculaController();
        $peliculas = $peliculaController->obtenerPeliculas();
        $miLista = $peliculaController->obtenerVerMasTarde($idPerfil);
        $continuarViendo = $peliculaController->obtenerContinuarViendo($idPerfil);
        
        return view('usuario.inicio', compact('perfil', 'perfiles', 'idUsuario', 'peliculas', 'miLista', 'continuarViendo'));
    }
  
     public function mostrarCuenta($idUsuario){
        $perfiles = $this->obtenerPerfiles($idUsuario);
        $usuario = $this->obtenerUsuario($idUsuario);
        return view('usuario.cuenta', compact('perfiles', 'usuario', 'idUsuario'));
    }

    public function mostrarAyuda($idUsuario){
        return view('usuario.ayuda', compact('idUsuario'));
    }

    public function crearPerfilVista($idUsuario){
        $perfiles = $this->obtenerPerfiles($idUsuario);
        return view('perfil.crear', compact('idUsuario', 'perfiles'));
    }

    public function crearPerfil(Request $request, $idUsuario){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body = [
            'nombre' => $request->input('nombre'),
            'contraseniaperfil' => $request->input('psw'),
            'imagen' => $request->input('icono'),
        ];

  
        $resultado = $cliente->post("http://localhost:8080/api/perfil/crear/{$idUsuario}", [
            'headers' => $headers,
            'body' => json_encode($body)
        ]);
               
        //perfil creado
        $perfil = json_decode($resultado->getBody());

        return $this->mostrarInicio($idUsuario, $perfil->idPerfil);
    }

    public function mostrarEditarPerfil($idUsuario, $idPerfil){
        $perfil = $this->obtenerPerfil($idPerfil);
        return view('usuario.editarMiPerfil', compact('perfil', 'idPerfil', 'idUsuario'));
    }

    public function mostrarEditarUsuario($idUsuario){
        $usuario = $this->obtenerUsuario($idUsuario);
        return view('usuario.editarMiUsuario', compact('usuario', 'idUsuario'));
    }

    public function mostrarEditarFormaPago($idUsuario){
        $usuario = $this->obtenerUsuario($idUsuario);
        return view('usuario.editarMiFormaPago', compact('usuario', 'idUsuario'));
    }

    public function mostrarEditarPlan($idUsuario){
        $planes = $this->obtenerPlanes();
        $usuario = $this->obtenerUsuario($idUsuario);
        return view('usuario.editarMiPlan', compact('usuario', 'planes', 'idUsuario'));
    }

    public function guardarPerfil($idUsuario, $idPerfil, Request $request){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body = [
            'idPerfil' => $request->input('idPerfil'),
            'nombre'=> $request->input('nombre'),
            'imagen' => $request->input('icono'),
            'contraseniaperfil' => $request->input('psw')
        ];
       
        $resultado = $cliente->post("http://localhost:8080/api/perfil/actualizar", [
            'headers' => $headers,
            'body' => json_encode($body)
        ]);

        $planes = json_decode($resultado->getBody());
        
        return redirect()->route('usuario.cuentaConfig', ['idUsuario' => $idUsuario]);
    }

    public function guardarUsuario($idUsuario, Request $request){
        $cliente = new Client();
    
        $headers = [
            'Content-Type' => 'application/json'
        ];
    
        $body = [
            'idUsuario' => $request->input('idUsuario'),
            'correo' => $request->input('correo'),
            'contrasena' => $request->input('psw'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido')
        ];
    
        $resultado = $cliente->post("http://localhost:8080/api/usuario/actualizar", [
            'headers' => $headers,
            'json' => $body
        ]);
    
        $usuario = json_decode($resultado->getBody());
    
        return redirect()->route('usuario.cuentaConfig', ['idUsuario' => $usuario->idUsuario]);
    }

    public function guardarFormaPago($idUsuario, Request $request){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $body = [
            'numeroTarjeta' => $request->input('idTarjeta'),
            'cvv' => $request->input('cvv'),
            'fechaVencimiento' => $request->input('fecha')
        ];

        $resultado = $cliente->post("http://localhost:8080/api/usuario/{$idUsuario}/tarjeta/actualizar", [
            'headers' => $headers,
            'json' => $body
        ]);

        $usuario = json_decode($resultado->getBody());
        
        return redirect()->route('usuario.cuentaConfig', ['idUsuario' => $usuario->idUsuario]);
        
    }

    public function guardarPlan($idUsuario, $idPlan){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];
       
        $resultado = $cliente->post("http://localhost:8080/api/usuario/{$idUsuario}/plan/{$idPlan}/actualizar", [
            'headers' => $headers,
        ]);

        $usuario = json_decode($resultado->getBody());
        
        return redirect()->route('usuario.cuentaConfig', ['idUsuario' => $usuario->idUsuario]);
        
    }

    public function mostrarMiLista($idPerfil){
    }

    public function mostrarContinuarViendo($idPerfil){
    }
}
