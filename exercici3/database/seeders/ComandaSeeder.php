<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comanda;

class ComandaSeeder extends Seeder
{
    /**
     * Ejecuta las semillas para poblar la base de datos con datos de comandes.
     *
     * @return void
     */
    public function run()
    {
        // Agregamos algunas comandes para los usuarios con los IDs respectivos
        Comanda::create(['usuari_id' => 1, 'detall_comanda' => 'Comanda 1 de Jordi']);  // Creamos una comanda para el usuario con ID 1 (Jordi)
        Comanda::create(['usuari_id' => 1, 'detall_comanda' => 'Comanda 2 de Jordi']);  // Creamos una segunda comanda para el usuario con ID 1 (Jordi)
        Comanda::create(['usuari_id' => 1, 'detall_comanda' => 'Comanda 3 de Jordi']);  // Creamos una tercera comanda para el usuario con ID 1 (Jordi)
        
        Comanda::create(['usuari_id' => 2, 'detall_comanda' => 'Comanda 1 de Maria']);  // Creamos una comanda para el usuario con ID 2 (Maria)
        
        Comanda::create(['usuari_id' => 3, 'detall_comanda' => 'Comanda 1 de Pau']);  // Creamos una comanda para el usuario con ID 3 (Pau)
        Comanda::create(['usuari_id' => 3, 'detall_comanda' => 'Comanda 2 de Pau']);  // Creamos una segunda comanda para el usuario con ID 3 (Pau)
        Comanda::create(['usuari_id' => 3, 'detall_comanda' => 'Comanda 3 de Pau']);  // Creamos una tercera comanda para el usuario con ID 3 (Pau)
        Comanda::create(['usuari_id' => 3, 'detall_comanda' => 'Comanda 4 de Pau']);  // Creamos una cuarta comanda para el usuario con ID 3 (Pau)
        Comanda::create(['usuari_id' => 3, 'detall_comanda' => 'Comanda 5 de Pau']);  // Creamos una quinta comanda para el usuario con ID 3 (Pau)
    }
}
