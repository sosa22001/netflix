<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PeliculaController extends Controller
{

    //metodos solo para obtener peliculas
    public function obtenerPeliculas(){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

       
        $resultado = $cliente->get("http://localhost:8080/api/pelicula/todas", [
            'headers' => $headers,
        ]);

        $peliculas = json_decode($resultado->getBody());
        
        return $peliculas;

    }

    public function obtenerPeliculasPorCategoria($idCategoria){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

       
        $resultado = $cliente->get("http://localhost:8080/api/pelicula/categoria/{$idCategoria}", [
            'headers' => $headers,
        ]);

        $peliculas = json_decode($resultado->getBody());
        
        return $peliculas;

    }

    public function obtenerVerMasTarde($idPerfil){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

       
        $resultado = $cliente->get("http://localhost:8080/api/perfil/vermastarde/{$idPerfil}", [
            'headers' => $headers,
        ]);

        $peliculas = json_decode($resultado->getBody());
        
        return $peliculas;

    }

    public function obtenerContinuarViendo($idPerfil){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

       
        $resultado = $cliente->get("http://localhost:8080/api/perfil/seguirViendo/${idPerfil}", [
            'headers' => $headers,
        ]);

        $peliculas = json_decode($resultado->getBody());
        
        return $peliculas;

    }

    //renderiza la pantalla inicial donde se muestran las peliculas
    public function mostrarInicio($idPerfil){
        $this->obtenerPeliculas();

    }

    public function mostrarPeliculas(){
        
    }

    public function agregarContinuarViendo($idPerfil,$idPelicula, $idUsuario){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->post("http://localhost:8080/api/perfil/guardarSeguirViendo/$idPerfil/$idPelicula");

        return redirect()->route('perfiles.inicio', ['idUsuario'=>$idUsuario,'idPerfil'=>$idPerfil]);
    }






}
