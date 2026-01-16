<?php

use Illuminate\Support\Facades\Route;
// Importamos el controlador
use App\Http\Controllers\PonenteVistaController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para ver la lista de ponentes
Route::get('/ponentes-vista', [PonenteVistaController::class, 'index'])->name('ponentes.vista');