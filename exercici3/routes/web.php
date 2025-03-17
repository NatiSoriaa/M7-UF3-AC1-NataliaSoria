<?php

use App\Http\Controllers\UsuariController;  // Importamos el controlador UsuariController

// Definimos una ruta GET para la URL '/usuaris'
Route::get('/usuaris', [UsuariController::class, 'index']);  // Cuando alguien acceda a la ruta '/usuaris', se ejecuta el metodo 'index' del controlador 'UsuariController'
