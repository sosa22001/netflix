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
//renderiza los perfiles de un usuario
Route::get('/usuarios/{idUsuario}/perfiles',[PerfilController::class,'mostrarPerfiles'])->name('perfiles.mostrar');

//muestra la pantalla para que el perfil digite el PIN
Route::get('/perfiles/{idUsuario}/{idPerfil}', [PerfilController::class,'mostrarPIN'])->name('perfil.formulario');

//valida el PIN
Route::get('/usuarios/{idUsuario}/perfiles/{idPerfil}/verificar', [PerfilController::class,'verificarPerfil'])->name('perfil.verificacion');

/* Route::get('/perfiles/verificar/{idUsuario}/{idPerfil}', [PerfilController::class,'verificarPerfil'])->name('perfil.verificacion');
 */
//entrega la vista para crear un perfil
Route::get('/usuarios/{idUsuario}/perfiles/crearVista', [PerfilController::class,'crearPerfilVista'])->name('perfil.crearVista');

//crea el perfil
Route::post('/perfiles/crear/{idUsuario}', [PerfilController::class,'crearPerfil'])->name('perfil.crear');


//dashboard
Route::get('/usuarios/{idUsuario}/perfiles/{idPerfil}/inicio',[PerfilController::class,'mostrarInicio'])->name('perfiles.inicio');

Route::get('usuarios/{idUsuario}/perfiles/ayuda', [PerfilController::class,'mostrarAyuda'])->name('usuario.ayuda');

Route::get('/usuarios/{idUsuario}/cuenta', [PerfilController::class,'mostrarCuenta'])->name('usuario.cuentaConfig');

Route::get('/perfiles/{idPerfil}/mi-lista', [PerfilController::class,'mostrarMiLista'])->name('perfil.miLista');

Route::get('/perfiles/{idPerfil}/continuar-viendo', [PerfilController::class,'mostrarContinuarViendo'])->name('perfil.mostrarContinuarViendo');

/* Actualizaciones del usuario */
Route::get('/usuarios/{idUsuario}/perfiles/{idPerfil}/editar', [PerfilController::class,'mostrarEditarPerfil'])->name('usuario.editarPerfil');
Route::put('/usuarios/{idUsuario}/perfiles/{idPerfil}/editar/guardar', [PerfilController::class, 'guardarPerfil'])->name('usuario.guardarPerfilEditado');

Route::get('/usuarios/{idUsuario}/editar-usuario', [PerfilController::class,'mostrarEditarUsuario'])->name('usuario.editarUsuario');
Route::put('/usuarios/{idUsuario}/guardar-usuario', [PerfilController::class, 'guardarUsuario'])->name('usuario.guardarUsuarioEditado');

Route::get('/usuarios/{idUsuario}/editar-forma-pago', [PerfilController::class,'mostrarEditarFormaPago'])->name('usuario.editarFormaPago');
Route::put('/usuarios/{idUsuario}/guardar-forma-pago', [PerfilController::class, 'guardarFormaPago'])->name('usuario.guardarFormaPagoEditada');

Route::get('/usuarios/{idUsuario}/editar-plan', [PerfilController::class, 'mostrarEditarPlan'])->name('usuario.editarPlan');
Route::get('/usuarios/{idUsuario}/guardar-plan/{idPlan}', [PerfilController::class, 'guardarPlan'])->name('usuario.guardarPlanEditado');

//peliculas
Route::get('/peliculas', [PeliculaController::class, 'mostrarPeliculas'])->name('peliculas.mostrar');