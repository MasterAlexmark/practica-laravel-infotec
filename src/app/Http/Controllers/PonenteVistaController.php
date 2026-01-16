<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponente; // Importamos el modelo

class PonenteVistaController extends Controller
{
    public function index(){
        // Traemos todos los ponentes de la base de datos
        $ponentes = Ponente::all();
        // Los enviamos a la vista
        return view('ponentes.vista', compact('ponentes'));
    }
}
