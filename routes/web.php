
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

// Ruta principal - muestra los eventos usando el controlador
Route::get('/', [EventoController::class, 'index']);

// Rutas de prueba (opcionales)
Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});