<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;  // Usamos el trait 'HasFactory' para poder generar factories para este modelo

    // Asegúrate de permitir la asignación masiva de 'nom'
    protected $fillable = ['nom'];  // Definimos que el campo 'nom' puede ser asignado de manera masiva (mass-assignment)

    // Relación: un Usuari tiene muchas Comandes
    public function comandes()
    {
        // Definimos que un 'Usuari' puede tener muchas 'Comandes'
        return $this->hasMany(Comanda::class);  // Relacionamos el modelo Usuari con el modelo Comanda, indicando que un usuario puede tener varias comandes
    }
}
