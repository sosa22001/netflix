<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\PerfilController;

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

    public function obtenerPeliculasPorCategoria($idPerfil,$idUsuario, Request $request){

        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];


        $resultado = $cliente->get("http://localhost:8080/api/pelicula/categoria/{$request->idCategoria}", [
            'headers' => $headers,
        ]);

        $peliculas = json_decode($resultado->getBody());
        
        return view('usuario.categorias', compact('peliculas','idPerfil','idUsuario'));

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

    public function obtenerPeliculasPorCategorias($idCategoria){

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

    public function agregarContinuarViendo($idPerfil, $idPelicula, $idUsuario){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->post("http://localhost:8080/api/perfil/guardarSeguirViendo/$idPerfil/$idPelicula");

        $pelicula = $this->obtenerPelicula($idPelicula);
        $perfilController = new PerfilController();
        $perfil = $perfilController->obtenerPerfil($idPerfil);
        $perfiles = $perfilController->obtenerPerfiles($idUsuario);
        $pelicRelacionadas = $this->obtenerPeliculasPorCategorias($pelicula->categoria->idCategorias);

        return view('usuario.pelicula', compact('pelicula', 'idUsuario', 'perfil', 'perfiles', 'pelicRelacionadas'));
    }

    public function obtenerPeliculaMasReciente(){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->get("http://localhost:8080/api/pelicula/reciente");

        $peliculas = json_decode($resultado->getBody());
        
        return $peliculas; 
    }

    function obtenerPelicula($idPelicula){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->get("http://localhost:8080/api/pelicula/buscar/{$idPelicula}");

        $pelicula = json_decode($resultado->getBody());
        
        return $pelicula; 
    }

    public function darMeGusta($idUsuario, $idPerfil, $idPelicula){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->post("http://localhost:8080/api/pelicula/guardarLike/{$idPerfil}/{$idPelicula}");

        return redirect()->route('agregar.continuarviendo', ['idPerfil' => $idPerfil, 'idPelicula' => $idPelicula, 'idUsuario' => $idUsuario]);

    }

    function like($idPelicula){
        $cliente = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $resultado = $cliente->get("http://localhost:8080/api/pelicula/like/{$idPelicula}");

        $like = json_decode($resultado->getBody());
        
        return $like; 
    }
    

}
