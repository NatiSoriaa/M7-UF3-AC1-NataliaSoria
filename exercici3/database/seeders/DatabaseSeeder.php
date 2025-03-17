<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta las semillas para poblar la base de datos.
     *
     * @return void
     */
    public function run()
    {
        // Llamamos a los seeders para agregar usuarios y comandes a la base de datos
        $this->call([  // Usamos el metodo call para ejecutar otros seeders
            UsuariSeeder::class,  // Llamamos al seeder que agrega usuarios
            ComandaSeeder::class,  // Llamamos al seeder que agrega comandes
        ]);
    }
}
