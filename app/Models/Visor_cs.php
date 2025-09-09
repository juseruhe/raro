<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visor_cs extends Model
{
    use HasFactory;

    protected $table = 'visor_cs'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'oid'; // Clave primaria de la tabla

    // Lista de campos que se pueden asignar masivamente
    protected $fillable = [
        'n_organizacion',
        'tematica',
        'correo',
        'oid_municipio',
        'oid_depto',
    ];

    // Indica si las columnas de creación y actualización deben ser gestionadas por Eloquent
    public $timestamps = false;

    // Tipos de datos de las propiedades
    protected $casts = [
        'oid_municipio' => 'integer',
        'oid_depto' => 'integer'
    ];
}
