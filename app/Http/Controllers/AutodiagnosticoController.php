<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autodiagnostico;

class AutodiagnosticoController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA
     */ 
    public function index()
    {
        $autodiagnosticos = Autodiagnostico::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'autodiagnosticos' => $autodiagnosticos
        ]);
    }

    /**u
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
        //Se crea una nueva instancia de la clase Autodiagnostico 
        $autodiagnostico = new Autodiagnostico;

        //Se asignan todos los datos a cada campo
        $autodiagnostico->oid_entidad = $request->input('oid_entidad');
        //$autodiagnostico->oid_entidad = $request->input('oid_tipo_entidad');
        $autodiagnostico->fecha = $request->input('fecha');
        $autodiagnostico->p1_1 = $request->input('p1_1');
        $autodiagnostico->p1_2 = $request->input('p1_2');
        $autodiagnostico->p1_3 = $request->input('p1_3');
        $autodiagnostico->p1_4 = $request->input('p1_4');
        $autodiagnostico->p1_5 = $request->input('p1_5');
        $autodiagnostico->p1_6 = $request->input('p1_6');
        $autodiagnostico->p1_7 = $request->input('p1_7');
        $autodiagnostico->p2_1 = $request->input('p2_1');
        $autodiagnostico->p2_2 = $request->input('p2_2');
        $autodiagnostico->p2_3 = $request->input('p2_3');
        $autodiagnostico->p2_4 = $request->input('p2_4');
        $autodiagnostico->p2_5 = $request->input('p2_5');
        $autodiagnostico->p2_6 = $request->input('p2_6');
        $autodiagnostico->p2_7 = $request->input('p2_7');
        $autodiagnostico->p2_8 = $request->input('p2_8');
        $autodiagnostico->p3_1 = $request->input('p3_1');
        $autodiagnostico->p3_2 = $request->input('p3_2');
        $autodiagnostico->p3_3 = $request->input('p3_3');
        $autodiagnostico->p3_4 = $request->input('p3_4');
        $autodiagnostico->p3_5 = $request->input('p3_5');
        $autodiagnostico->p3_6 = $request->input('p3_6');
        $autodiagnostico->p3_7 = $request->input('p3_7');
        $autodiagnostico->p3_8 = $request->input('p3_8');
        $autodiagnostico->p3_9 = $request->input('p3_9');
        $autodiagnostico->p4_1 = $request->input('p4_1');
        $autodiagnostico->p4_2 = $request->input('p4_2');
        $autodiagnostico->p4_3 = $request->input('p4_3');
        $autodiagnostico->p4_4 = $request->input('p4_4');
        $autodiagnostico->p4_5 = $request->input('p4_5');
        $autodiagnostico->p4_6 = $request->input('p4_6');
        $autodiagnostico->p4_7 = $request->input('p4_7');
        $autodiagnostico->p5_1 = $request->input('p5_1');
        $autodiagnostico->p5_2 = $request->input('p5_2');
        $autodiagnostico->p5_3 = $request->input('p5_3');
        $autodiagnostico->p5_4 = $request->input('p5_4');
        $autodiagnostico->p5_5 = $request->input('p5_5');

        $autodiagnostico->save();

        return response()->json([
            'message' => 'Autodiagnostico created successfully',
            'autodiagnostico' => $autodiagnostico
        ]);
    }

    /**
     * GET -> SHOW -> Se utiliza para mostrar un registro específico
     */
    public function show(string $id)
    {
        //Find para buscar el registro mediante ID
        $autodiagnostico = Autodiagnostico::find($id);

        return response()->json([
            'autodiagnostico' => $autodiagnostico
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
        $autodiagnostico = Autodiagnostico::find($id);

        $autodiagnostico->oid_entidad = $request->input('oid_entidad');
        //$autodiagnostico->oid_entidad = $request->input('oid_tipo_entidad');
        $autodiagnostico->fecha = $request->input('fecha');
        $autodiagnostico->p1_1 = $request->input('p1_1');
        $autodiagnostico->p1_2 = $request->input('p1_2');
        $autodiagnostico->p1_3 = $request->input('p1_3');
        $autodiagnostico->p1_4 = $request->input('p1_4');
        $autodiagnostico->p1_5 = $request->input('p1_5');
        $autodiagnostico->p1_6 = $request->input('p1_6');
        $autodiagnostico->p1_7 = $request->input('p1_7');
        $autodiagnostico->p2_1 = $request->input('p2_1');
        $autodiagnostico->p2_2 = $request->input('p2_2');
        $autodiagnostico->p2_3 = $request->input('p2_3');
        $autodiagnostico->p2_4 = $request->input('p2_4');
        $autodiagnostico->p2_5 = $request->input('p2_5');
        $autodiagnostico->p2_6 = $request->input('p2_6');
        $autodiagnostico->p2_7 = $request->input('p2_7');
        $autodiagnostico->p2_8 = $request->input('p2_8');
        $autodiagnostico->p3_1 = $request->input('p3_1');
        $autodiagnostico->p3_2 = $request->input('p3_2');
        $autodiagnostico->p3_3 = $request->input('p3_3');
        $autodiagnostico->p3_4 = $request->input('p3_4');
        $autodiagnostico->p3_5 = $request->input('p3_5');
        $autodiagnostico->p3_6 = $request->input('p3_6');
        $autodiagnostico->p3_7 = $request->input('p3_7');
        $autodiagnostico->p3_8 = $request->input('p3_8');
        $autodiagnostico->p3_9 = $request->input('p3_9');
        $autodiagnostico->p4_1 = $request->input('p4_1');
        $autodiagnostico->p4_2 = $request->input('p4_2');
        $autodiagnostico->p4_3 = $request->input('p4_3');
        $autodiagnostico->p4_4 = $request->input('p4_4');
        $autodiagnostico->p4_5 = $request->input('p4_5');
        $autodiagnostico->p4_6 = $request->input('p4_6');
        $autodiagnostico->p4_7 = $request->input('p4_7');
        $autodiagnostico->p5_1 = $request->input('p5_1');
        $autodiagnostico->p5_2 = $request->input('p5_2');
        $autodiagnostico->p5_3 = $request->input('p5_3');
        $autodiagnostico->p5_4 = $request->input('p5_4');
        $autodiagnostico->p5_5 = $request->input('p5_5');

        $autodiagnostico->save();

        return response()->json([
            'message' => 'Autodiagnostico updated successfully',
            'autodiagnostico' => $autodiagnostico
        ]);
    }

    /**
     * DELETE -> DESTROY -> Se utiliza para eliminar un registro específico
     */
    public function destroy(string $id)
    {
        //Para buscar el registro especifico
        $autodiagnostico = Autodiagnostico::find($id);
        //delete para eliminarlo
        $autodiagnostico->delete();

        return response()->json([
            'message' => 'Autodiagnostico deleted successfully'
        ]);
    }
}
