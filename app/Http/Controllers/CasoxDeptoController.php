<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CasoxDepto;

class CasoxDeptoController extends Controller
{
    /**
     * GET -> INDEX -> LISTAR TODOS LOS REGISTROS DE LA TABLA 
     */ 
    public function index()
    {
        $casoxdepto = CasoxDepto::all();//Trae todos los registros

        //Deolver JSON con todos los registros
        return response()->json([
            'casoxdepto' => $casoxdepto
        ]);
    }
}
