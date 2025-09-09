<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasoxDepto extends Model
{
    use HasFactory;

    protected $table = 'casoxdepto'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'oid_depto'; // Clave primaria de la tabla 

    // Lista de campos que se pueden asignar masivamente
    protected $fillable = [
        'n_depto',
        'lat',
        'lng',
        'num_caso',
    ];

    // Indica si las columnas de creación y actualización deben ser gestionadas por Eloquent
    public $timestamps = false;

    // Tipos de datos de las propiedades
    protected $casts = [
        'num_caso' => 'integer',
        'lat' => 'double',
        'lng' => 'double'
    ];
}
