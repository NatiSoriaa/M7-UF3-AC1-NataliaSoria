<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuari;

class UsuariSeeder extends Seeder
{
    /**
     * Ejecuta las semillas para poblar la base de datos con usuarios.
     *
     * @return void
     */
    public function run()
    {
        // Agregamos algunos usuarios a la base de datos
        Usuari::create(['nom' => 'Jordi']);  // Creamos un usuario con el nombre 'Jordi'
        Usuari::create(['nom' => 'Maria']);  // Creamos un usuario con el nombre 'Maria'
        Usuari::create(['nom' => 'Pau']);    // Creamos un usuario con el nombre 'Pau'
    }
}
