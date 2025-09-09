<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidad;

class EntidadController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $entidades = Entidad::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'entidades' => $entidades
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
        //Se crea una nueva instancia de la clase Entidad 
        $entidad = new Entidad;

        //Se asignan todos los datos a cada campo
        $entidad->n_entidad = $request->input('n_entidad');

        $entidad->save();

        return response()->json([
            'message' => 'Entidad created successfully',
            'entidad' => $entidad
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $entidad = Entidad::find($id);

        return response()->json([
            'entidad' => $entidad
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
        $entidad = Entidad::find($id);

        $entidad->n_entidad = $request->input('n_entidad');

        $entidad->save();

        return response()->json([
            'message' => 'Entidad updated successfully',
            'entidad' => $entidad
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $entidad = Entidad::find($id);
        //delete para eliminarlo
        $entidad->delete();

        return response()->json([
            'message' => 'Entidad deleted successfully'
        ]);
    }
}
