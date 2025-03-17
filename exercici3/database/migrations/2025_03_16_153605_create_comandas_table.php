<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migracion para crear la tabla 'comandes'.
     */
    public function up()
    {
        // Creamos la tabla 'comandes' con los campos necesarios
        Schema::create('comandes', function (Blueprint $table) {
            $table->id();  // Creamos la columna 'id' como clave primaria de la tabla
            $table->unsignedBigInteger('usuari_id');  // Creamos la columna 'usuari_id' que almacenara el ID del usuario que hizo la comanda
            $table->string('detall_comanda');  // Creamos la columna 'detall_comanda' para almacenar los detalles de la comanda
            $table->timestamps();  // Creamos las columnas 'created_at' y 'updated_at' para gestionar fechas automaticamente

            // Definimos una clave foranea para 'usuari_id' que hace referencia a 'id' de la tabla 'usuaris'
            $table->foreign('usuari_id')->references('id')->on('usuaris')->onDelete('cascade');  // Si un usuario es eliminado, sus comandes tambien seran eliminadas
        });
    }

    /**
     * Revierte la migracion, eliminando la tabla 'comandes'.
     */
    public function down()
    {
        // Eliminamos la tabla 'comandes' si existe
        Schema::dropIfExists('comandes');  // Eliminamos la tabla 'comandes' en caso de que se necesite revertir la migracion
    }

};
