<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visor_cs;

class Visor_csController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $visor_css = Visor_cs::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'visor_css' => $visor_css
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
        //Se crea una nueva instancia de la clase Visor_cs 
        $visor_cs = new Visor_cs;

        //Se asignan todos los datos a cada campo
        $visor_cs->n_organizacion = $request->input('n_organizacion');
        $visor_cs->tematica = $request->input('tematica');
        $visor_cs->correo = $request->input('correo');
        $visor_cs->oid_municpio = $request->input('oid_municpio');
        $visor_cs->oid_depto = $request->input('oid_depto');

        $visor_cs->save();

        return response()->json([
            'message' => 'Visor_cs created successfully',
            'visor_cs' => $visor_cs
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $visor_cs = Visor_cs::find($id);

        return response()->json([
            'visor_cs' => $visor_cs
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
        $visor_cs = Visor_cs::find($id);

        $visor_cs->n_organizacion = $request->input('n_organizacion');
        $visor_cs->tematica = $request->input('tematica');
        $visor_cs->correo = $request->input('correo');
        $visor_cs->oid_municpio = $request->input('oid_municpio');
        $visor_cs->oid_depto = $request->input('oid_depto');

        $visor_cs->save();

        return response()->json([
            'message' => 'Visor_cs updated successfully',
            'visor_cs' => $visor_cs
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $visor_cs = Visor_cs::find($id);
        //delete para eliminarlo
        $visor_cs->delete();

        return response()->json([
            'message' => 'Visor_cs deleted successfully'
        ]);
    }
}
