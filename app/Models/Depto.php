<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depto extends Model
{
    use HasFactory;

    protected $table = 'depto'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'oid'; // Clave primaria de la tabla

    // Lista de campos que se pueden asignar masivamente
    protected $fillable = [
        'n_depto','lat','lng'
    ];

    // Indica si las columnas de creación y actualización deben ser gestionadas por Eloquent
    public $timestamps = false;
}
