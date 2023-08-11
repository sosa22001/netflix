<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;

//Login
Route::get('/login', [AutenticacionController::class,'mostrarLogin'])->name('login.formulario');

Route::post('/iniciar/sesion', [AutenticacionController::class,'verificarUsuario'])->name('login.verificacion');

//registro
Route::get('/registro', [AutenticacionController::class,'mostrarRegistro'])->name('registro.formulario');

Route::post('/registro', [AutenticacionController::class,'formularioRegistro'])->name('registro.siguiente');

Route::get('/registro/planes', [AutenticacionController::class, 'mostrarPlanes'])->name('registro.planes');

//perfiles
Route::get('/usuarios/{idUsuario}/perfiles',[PerfilController::class,'mostrarPerfiles'])->name('perfiles.mostrar');

Route::get('/perfiles/{idPerfil}', [PerfilController::class,'crearPerfilVista'])->name('perfil.formulario');

Route::get('/perfiles/{idPerfil}/verificar', [PerfilController::class,'verificarPerfil'])->name('perfil.verificacion');

Route::get('/perfiles/crearVista', [PerfilController::class,'crearPerfilVista'])->name('perfil.crearVista');

Route::post('/perfiles/crear', [PerfilController::class,'crearPerfil'])->name('perfil.crear');


//dashboard
Route::get('/inicio',[PerfilController::class,'mostrarInicio'])->name('perfiles.inicio');

Route::get('/cuenta',[PerfilController::class,'mostrarCuenta'])->name('usuario.cuentaConfig');

Route::get('/ayuda',[PerfilController::class,'mostrarAyuda'])->name('usuario.ayuda');







