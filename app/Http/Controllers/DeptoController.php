<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depto;

class DeptoController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $deptos = Depto::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'deptos' => $deptos
        ]);
    }
    /**
     * POST -> STORE -> PARA AGREGAR UN NUEVO REGISTRO A LA TABLA
     */
    //Request -> Contiene los datos de la solicitud HTTP entrante
    public function store(Request $request)
    {
        //Se crea una nueva instancia de la clase Depto 
        $depto = new Depto;

        //Se asignan todos los datos a cada campo
        $depto->n_depto = $request->input('n_depto');
        $depto->lat = $request->input('lat');
        $depto->lng= $request->input('lng');

        $depto->save();

        return response()->json([
            'message' => 'Depto created successfully',
            'depto' => $depto
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $depto = Depto::find($id);

        return response()->json([
            'depto' => $depto
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
        $depto = Depto::find($id);

        $depto->n_depto = $request->input('n_depto');

        $depto->save();

        return response()->json([
            'message' => 'Depto updated successfully',
            'depto' => $depto
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $depto = Depto::find($id);
        //delete para eliminarlo
        $depto->delete();

        return response()->json([
            'message' => 'Depto deleted successfully'
        ]);
    }
}
