<?php

use App\Http\Controllers\Api\AtividadesController;
use App\Http\Controllers\Api\BicicletaController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('atividades',AtividadesController::class)
        ->middleware('auth:sanctum');//todas protegidas (post, put, delete)

//Route::apiResource('atividades',AtividadesController::class)
   //     ->only(['index','show']);//sobreescreve a proteção de index e show

Route::apiResource('users',UserController::class)->only(['store']);//Desprotegidas

Route::apiResource('users',UserController::class)
    ->middleware('auth:sanctum');


Route::apiResource('bicicletas',BicicletaController::class)
    ->middleware('auth:sanctum');//todas protegidas (post, put, delete)

// Route::apiResource('bicicletas',BicicletaController::class)
//     ->only(['index','show']);//sobreescreve a proteção de index e show


Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth:sanctum');


// // Route::apiResource('bicicletas', BicicletaController::class);

// Route::apiResource('atividades', AtividadesController::class);

// Route::apiResource('users', UserController::class);

// Route::post('/bicicleta', [BicicletaController::class, 'store']);

// Route::post('/atividades', [AtividadesController::class, 'store']);

// Route::post('/users', [UserController::class, 'store']);
