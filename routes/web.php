<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;


Route::get('/login', [AutenticacionController::class,'mostrarLogin'])->name('login.formulario');

Route::get('/registro', [AutenticacionController::class,'mostrarRegistro'])->name('registro.formulario');

Route::post('/iniciar/sesion', [AutenticacionController::class,'verificarUsuario'])->name('login.verificacion');

//perfiles
Route::get('/usuarios/{idUsuario}/perfiles',[PerfilController::class,'mostrarPerfiles'])->name('perfiles.mostrar');

Route::get('/usuarios/{idUsuario}/perfiles/{idPerfil}', [PerfilController::class,'mostrarLogin'])->name('perfil.formulario');
Route::get('/usuarios/{idUsuario}/perfiles/{idPerfil}/verificar', [PerfilController::class,'verificarPerfil'])->name('perfil.verificacion');



