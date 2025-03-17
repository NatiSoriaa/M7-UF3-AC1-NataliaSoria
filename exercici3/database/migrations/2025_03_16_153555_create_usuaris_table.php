<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migración para crear la tabla 'usuaris'.
     */
    public function up()
    {
        // Creamos la tabla 'usuaris' con los campos necesarios
        Schema::create('usuaris', function (Blueprint $table) {
            $table->id();  // Creamos la columna 'id' como clave primaria de la tabla
            $table->string('nom');  // Creamos la columna 'nom' que almacenará el nombre del usuario
            $table->timestamps();  // Creamos las columnas 'created_at' y 'updated_at' para gestionar fechas automáticamente
        });
    }

    /**
     * Revierte la migración, eliminando la tabla 'usuaris'.
     */
    public function down(): void
    {
        // Eliminamos la tabla 'usuaris' si existe
        Schema::dropIfExists('usuaris');  // Eliminamos la tabla 'usuaris' en caso de que se necesite revertir la migración
    }
};
