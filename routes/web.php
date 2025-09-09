<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\CasoxDeptoController;
use App\Http\Controllers\AutodiagnosticoController;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\Visor_csController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return "Hola desde contactos";
});

Route::middleware(['web'])->group(function () {
    Route::prefix('casos')->group(function () {
        Route::get('/', [CasoController::class, 'index']); // Obtener todos los registros
        Route::post('/', [CasoController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [CasoController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [CasoController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [CasoController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('actores')->group(function () {
        Route::get('/', [ActorController::class, 'index']); // Obtener todos los registros
        Route::post('/', [ActorController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [ActorController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [ActorController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [ActorController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('deptos')->group(function () {
        Route::get('/', [DeptoController::class, 'index']); // Obtener todos los registros
        Route::post('/', [DeptoController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [DeptoController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [DeptoController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [DeptoController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('municipios')->group(function () {
        Route::get('/', [MunicipioController::class, 'index']); // Obtener todos los registros
        Route::post('/', [MunicipioController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [MunicipioController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [MunicipioController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [MunicipioController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('autodiagnosticos')->group(function () {
        Route::get('/', [AutodiagnosticoController::class, 'index']); // Obtener todos los registros
        Route::post('/', [AutodiagnosticoController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [AutodiagnosticoController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [AutodiagnosticoController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [AutodiagnosticoController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('entidades')->group(function () {
        Route::get('/', [EntidadController::class, 'index']); // Obtener todos los registros
        Route::post('/', [EntidadController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [EntidadController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [EntidadController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [EntidadController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::prefix('casoxdeptos')->group(function () {
        Route::get('/', [CasoxDeptoController::class, 'index']); 
    });

    Route::prefix('visor_css')->group(function () {
        Route::get('/', [Visor_csController::class, 'index']); // Obtener todos los registros
        Route::post('/', [Visor_csController::class, 'store']); // Crear un nuevo registro
        Route::get('/{id}', [Visor_csController::class, 'show']); // Obtener un registro específico por su ID
        Route::put('/{id}', [Visor_csController::class, 'update']); // Actualizar un registro específico por su ID
        Route::delete('/{id}', [Visor_csController::class, 'destroy']); // Eliminar un registro específico por su ID
    });

    Route::get('/token', function () {
        return csrf_token();
    });
});
