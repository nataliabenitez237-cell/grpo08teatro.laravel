<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventocontroller;

// Ruta principal
Route::get('/', [eventocontroller::class, 'index']);

// Página de eventos (con datos del controlador)
Route::get('/eventos', [eventocontroller::class, 'eventos']);

// Rutas de páginas estáticas
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/boleteria', function () {
    return view('boleteria');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::get('/talleres', function () {
    return view('talleres');
});

Route::get('/registro', function () {
    return view('registro');
});