<?php

use App\Http\Controllers\Api\AtividadesController;
use App\Http\Controllers\Api\BicicletaController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('bicicletas', BicicletaController::class);

Route::apiResource('atividades', AtividadesController::class);

Route::apiResource('users', UserController::class);
