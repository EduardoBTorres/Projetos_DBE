<?php

use App\Http\Controllers\BicicletaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rotas de READ
Route::get('/bicicletas', [BicicletaController::class,'index']);

Route::get('/bicicleta/{id}', [BicicletaController::class, 'show'])->name('show');

//Rotas de CREATE
Route::get('/bicicleta', [BicicletaController::class, 'create']);

Route::post('/bicicleta', [BicicletaController::class, 'store']);

//Rotas de UPDATE
Route::get('/bicicleta/{id}/edit', [BicicletaController::class, 'edit'])->name('edit');

Route::post('/bicicleta/{id}/update', [BicicletaController::class, 'update'])->name('update');

//Rota de DELETE
Route::get('/bicicleta/{id}/delete', [BicicletaController::class, 'delete'])->name('delete');

Route::post('/bicicleta/{id}/delete', [BicicletaController::class, 'remove'])->name('remove');
