<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

class UsuariController extends Controller
{
    public function index()
    {
        // Solo obtener los usuarios que tienen al menos una comanda
        $usuaris = Usuari::whereHas('comandes')  // Verificamos que solo se traigan los usuarios que tienen comandes asociadas
                         ->withCount('comandes') // Contamos cuantas comandes tiene cada usuario
                         ->get();  // Obtenemos todos los usuarios con la informacion de las comandes

        // Pasamos la variable 'usuaris' a la vista 'usuaris.index' para mostrarla
        return view('usuaris.index', compact('usuaris'));  // 'compact' crea un arreglo con la variable 'usuaris' y la pasa a la vista
    }
}
