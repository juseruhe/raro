<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->id();
            $table->text('nom_caso');
            $table->date('fecha');
            $table->text('ubicacion');
            $table->text('area_protegida');
            $table->text('actores');
            $table->text('tipo_delito');
            $table->text('tipo_corrupcion');
            $table->text('condena');
            $table->text('resolucion');
            $table->integer('año_investigacion');
            $table->text('tipo_sancion');
            $table->text('monto');
            $table->text('beneficios_ilegal');
            $table->text('perjuicios');
            $table->text('tipo_daño');
            $table->text('mecanismo');
            $table->text('sector_afectado');
            $table->text('investigacion');
            $table->text('sancion');
            $table->text('imp_social');
            $table->text('imp_economico');
            $table->text('fuentes');
            $table->text('estado_actual');
            $table->text('lecciones');
            $table->text('region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caso');
    }
};
