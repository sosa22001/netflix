<?php

use Illuminate\Support\Facades\Route;


Route::get('/iniciar/sesion', function() {
    return view();
});

Route::get('/registro', function () {
    return view('registro');
});

