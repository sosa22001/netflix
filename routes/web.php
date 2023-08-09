<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;


Route::get('/iniciar/sesion', [AutenticacionController::class,'mostrarLogin']);

Route::post('/iniciar/sesion', [AutenticacionController::class,'verificacion'])->name('login.verificacion');

Route::get('/registro/mostrar', [AutenticacionController::class,'mostrarRegistro'])->name('registro.mostrar');

//perfiles
Route::get('/mostrar/perfiles/{idUsuario}',[PerfilController::class,'renderizarPerfiles']);

