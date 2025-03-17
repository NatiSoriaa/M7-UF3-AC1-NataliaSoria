<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;  // Usamos el trait 'HasFactory' para poder generar factories para este modelo

    protected $table = 'comandes';  // Especificamos el nombre de la tabla en la base de datos, que en este caso es 'comandes'

    protected $fillable = ['detalls', 'usuari_id'];  // Definimos los campos que se pueden asignar de manera masiva, en este caso 'detalls' y 'usuari_id'

    public function usuari()
    {
        // Definimos la relación inversa, una comanda pertenece a un solo usuari
        return $this->belongsTo(Usuari::class);  // Relacionamos el modelo Comanda con el modelo Usuari
    }
}
