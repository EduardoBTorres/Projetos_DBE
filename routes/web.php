<?php

use App\Http\Controllers\BicicletaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bicicletas', [BicicletaController::class,'index']);

Route::get('/bicicleta/{$id}', [BicicletaController::class, 'show']);
