<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $actores = Actor::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'actores' => $actores
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
        //Se crea una nueva instancia de la clase Actor 
        $actor = new Actor;

        //Se asignan todos los datos a cada campo
        $actor->n_actor = $request->input('n_actor');

        $actor->save();

        return response()->json([
            'message' => 'Actor created successfully',
            'actor' => $actor
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $actor = Actor::find($id);

        return response()->json([
            'actor' => $actor
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
        $actor = Actor::find($id);

        $actor->n_actor = $request->input('n_actor');

        $actor->save();

        return response()->json([
            'message' => 'Actor updated successfully',
            'actor' => $actor
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $actor = Actor::find($id);
        //delete para eliminarlo
        $actor->delete();

        return response()->json([
            'message' => 'Actor deleted successfully'
        ]);
    }
}
