<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonenteVistaController;

Route::get('/', function () {
    return view('welcome');
});

// Ver lista de ponentes
Route::get('/ponentes-vista', [PonenteVistaController::class, 'index'])->name('ponentes.vista');

// Crear nuevo ponente
Route::post('/ponentes-vista', [PonenteVistaController::class, 'store'])->name('ponentes.store');

// Eliminar ponente
Route::delete('/ponentes-vista/{id}', [PonenteVistaController::class, 'destroy'])->name('ponentes.destroy');