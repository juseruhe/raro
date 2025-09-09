<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;

class CasoController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $casos = Caso::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'casos' => $casos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * POST -> STORE -> PARA AGREGAR UN NUEVO REGISTRO A LA TABLA
     */
    //Request -> Contiene los datos de la solicitud HTTP entrante
    public function store(Request $request)
    {
        //Se crea una nueva instancia de la clase Caso 
        $caso = new Caso;

        //Se asignan todos los datos a cada campo
        $caso->nom_caso = $request->input('nom_caso');
        $caso->fecha = $request->input('fecha');
        $caso->oid_municipio = $request->input('oid_municipio');
        $caso->oid_depto = $request->input('oid_depto');
        $caso->area_protegida = $request->input('area_protegida');
        $caso->oid_actor = $request->input('oid_actor');
        $caso->tipo_delito = $request->input('tipo_delito');
        $caso->tipo_corrupcion = $request->input('tipo_corrupcion');
        $caso->condena = $request->input('condena');
        $caso->resolucion = $request->input('resolucion');
        $caso->año_investigacion = $request->input('año_investigacion');
        $caso->tipo_sancion = $request->input('tipo_sancion');
        $caso->monto = $request->input('monto');
        $caso->beneficios_ilegal = $request->input('beneficios_ilegal');
        $caso->perjuicios = $request->input('perjuicios');
        $caso->tipo_daño = $request->input('tipo_daño');
        $caso->mecanismo = $request->input('mecanismo');
        $caso->sector_afectado = $request->input('sector_afectado');
        $caso->investigacion = $request->input('investigacion');
        $caso->sancion = $request->input('sancion');
        $caso->imp_social = $request->input('imp_social');
        $caso->imp_economico = $request->input('imp_economico');
        $caso->fuentes = $request->input('fuentes');
        $caso->estado_actual = $request->input('estado_actual');
        $caso->lecciones = $request->input('lecciones');

        $caso->save();

        return response()->json([
            'message' => 'Caso created successfully',
            'caso' => $caso
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $caso = Caso::find($id);

        return response()->json([
            'caso' => $caso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * PUT -> UPDATE -> Se encarga de actualizar un registro existente
     */
    //Request -> Contiene los datos de la solicitud HTTP entrante
    public function update(Request $request, string $id)
    {
        //Para buscar el registro especifico
        $caso = Caso::find($id);

        $caso->nom_caso = $request->input('nom_caso');
        $caso->fecha = $request->input('fecha');
        $caso->oid_municipio = $request->input('oid_municipio');
        $caso->oid_depto = $request->input('oid_depto');
        $caso->area_protegida = $request->input('area_protegida');
        $caso->oid_actor = $request->input('oid_actor');
        $caso->tipo_delito = $request->input('tipo_delito');
        $caso->tipo_corrupcion = $request->input('tipo_corrupcion');
        $caso->condena = $request->input('condena');
        $caso->resolucion = $request->input('resolucion');
        $caso->año_investigacion = $request->input('año_investigacion');
        $caso->tipo_sancion = $request->input('tipo_sancion');
        $caso->monto = $request->input('monto');
        $caso->beneficios_ilegal = $request->input('beneficios_ilegal');
        $caso->perjuicios = $request->input('perjuicios');
        $caso->tipo_daño = $request->input('tipo_daño');
        $caso->mecanismo = $request->input('mecanismo');
        $caso->sector_afectado = $request->input('sector_afectado');
        $caso->investigacion = $request->input('investigacion');
        $caso->sancion = $request->input('sancion');
        $caso->imp_social = $request->input('imp_social');
        $caso->imp_economico = $request->input('imp_economico');
        $caso->fuentes = $request->input('fuentes');
        $caso->estado_actual = $request->input('estado_actual');
        $caso->lecciones = $request->input('lecciones');

        $caso->save();

        return response()->json([
            'message' => 'Caso updated successfully',
            'caso' => $caso
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $caso = Caso::find($id);
        //delete para eliminarlo
        $caso->delete();

        return response()->json([
            'message' => 'Caso deleted successfully'
        ]);
    }
}
