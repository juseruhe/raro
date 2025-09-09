<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;// Se debe instalar el parquete Carbon para manejar fechas "composer require nesbot/carbon"

class Caso extends Model
{
    use HasFactory;

    protected $table = 'caso'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'oid'; // Clave primaria de la tabla

    // Lista de campos que se pueden asignar masivamente
    protected $fillable = [
        'nom_caso',
        'fecha',
        'oid_municipio',
        'oid_depto',
        'area_protegida',
        'oid_actor',
        'tipo_delito',
        'tipo_corrupcion',
        'condena',
        'resolucion',
        'año_investigacion',
        'tipo_sancion',
        'monto',
        'beneficios_ilegal',
        'perjuicios',
        'tipo_daño',
        'mecanismo',
        'sector_afectado',
        'investigacion',
        'sancion',
        'imp_social',
        'imp_economico',
        'fuentes',
        'estado_actual',
        'lecciones',
    ];

    // Indica si las columnas de creación y actualización deben ser gestionadas por Eloquent
    public $timestamps = false;

    // Tipos de datos de las propiedades
    protected $casts = [
        'fecha' => 'date',
        'año_investigacion' => 'integer'
    ];

    // Accessor para formatear la fecha
    public function getFechaAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
