<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;// Se debe instalar el parquete Carbon para manejar fechas "composer require nesbot/carbon"

class Autodiagnostico extends Model
{
    use HasFactory;

    protected $table = 'autodiagnostico'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'oid'; // Clave primaria de la tabla

    // Lista de campos que se pueden asignar masivamente
    protected $fillable = [
        'oid_entidad',
        //'oid_tipo_entidad',
        'fecha',
        'p1_1',
        'p1_2',
        'p1_3',
        'p1_4',
        'p1_5',
        'p1_6',
        'p1_7',
        'p2_1',
        'p2_2',
        'p2_3',
        'p2_4',
        'p2_5',
        'p2_6',
        'p2_7',
        'p2_8',
        'p3_1',
        'p3_2',
        'p3_3',
        'p3_4',
        'p3_5',
        'p3_6',
        'p3_7',
        'p3_8',
        'p3_9',
        'p4_1',
        'p4_2',
        'p4_3',
        'p4_4',
        'p4_5',
        'p4_6',
        'p4_7',
        'p5_1',
        'p5_2',
        'p5_3',
        'p5_4',
        'p5_5',
    ];

    // Indica si las columnas de creación y actualización deben ser gestionadas por Eloquent
    public $timestamps = false;

    // Tipos de datos de las propiedades
    protected $casts = [
        'fecha' => 'date',
        'oid_entidad' => 'integer',
        'oid_tipo_entidad' => 'integer'        
    ];

    // Accessor para formatear la fecha
    public function getFechaAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
