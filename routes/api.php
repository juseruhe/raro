<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;


// Rutas para el Controlador Caso
Route::prefix('casos')->group(function () {
    Route::get('/', [CasoController::class, 'index']); // Obtener todos los registros
    Route::post('/', [CasoController::class, 'store']); // Crear un nuevo registro
    Route::get('/{id}', [CasoController::class, 'show']); // Obtener un registro específico por su ID
    Route::put('/{id}', [CasoController::class, 'update']); // Actualizar un registro específico por su ID
    Route::delete('/{id}', [CasoController::class, 'destroy']); // Eliminar un registro específico por su ID
});

// Rutas para el Controlador Actores
Route::prefix('actores')->group(function () {
    Route::get('/', [CasoController::class, 'index']); // Obtener todos los registros
    Route::post('/', [CasoController::class, 'store']); // Crear un nuevo registro
    Route::get('/{id}', [CasoController::class, 'show']); // Obtener un registro específico por su ID
    Route::put('/{id}', [CasoController::class, 'update']); // Actualizar un registro específico por su ID
    Route::delete('/{id}', [CasoController::class, 'destroy']); // Eliminar un registro específico por su ID
});

Route::get('/token', function () {
    Log::debug('Generando CSRF token.');
    return csrf_token();
});
/*
Route::get('casos', [CasoController::class, 'index']);
Route::post('casos', [CasoController::class, 'store']);
Route::get('casos/{id}', [CasoController::class, 'show']);
Route::put('casos/{id}', [CasoController::class, 'update']);
Route::delete('casos/{id}', [CasoController::class, 'destroy']);



die("API routes loaded");*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/