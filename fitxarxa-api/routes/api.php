<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Test mínim
Route::get('/hola', function() {
    return ['missatge'=>'Hola FitXarxa API'];
});
Route::get('/entrenadors', [ApiController::class, 'entrenadors']);
Route::get('/sesions', [ApiController::class, 'sesions']); // fixa el nom: 'sessions'
Route::post('/entrenador', [ApiController::class, 'crearEntrenador']);
Route::post('/sessio', [ApiController::class, 'crearSessio']);
Route::put('/sessio/{id}', [ApiController::class, 'editarSessio']);
Route::delete('/sessio/{id}', [ApiController::class, 'eliminarSessio']);
Route::delete('/entrenador/{id}', [ApiController::class, 'eliminarEntrenador']);
Route::get('/imatge/{nom}', [ApiController::class, 'imatgeEntrenador']);

