<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $municipios = Municipio::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'municipios' => $municipios
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
        //Se crea una nueva instancia de la clase Municipio 
        $municipio = new Municipio;

        //Se asignan todos los datos a cada campo
        $municipio->n_municipio = $request->input('n_municipio');
        $municipio->oid_depto = $request->input('oid_depto');

        $municipio->save();

        return response()->json([
            'message' => 'municipio created successfully',
            'municipio' => $municipio
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $municipio = Municipio::find($id);

        return response()->json([
            'municipio' => $municipio
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
        $municipio = Municipio::find($id);

        $municipio->n_municipio = $request->input('n_municipio');

        $municipio->save();

        return response()->json([
            'message' => 'Municipio updated successfully',
            'municipio' => $municipio
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $municipio = Municipio::find($id);
        //delete para eliminarlo
        $municipio->delete();

        return response()->json([
            'message' => 'Municipio deleted successfully'
        ]);
    }
}
