<?php

use App\Http\Controllers\BicicletaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bicicletas', [BicicletaController::class,'index']);

Route::get('/bicicleta/{id}', [BicicletaController::class, 'show'])->name('show');

Route::get('/bicicleta', [BicicletaController::class, 'create']);

Route::post('/bicicleta', [BicicletaController::class, 'store']);

Route::get('/bicicleta/{id}/edit', [BicicletaController::class, 'edit'])->name('edit');

Route::post('/bicicleta/{id}/update', [BicicletaController::class, 'update'])->name('update');

Route::get('/bicicleta/{id}/delete', [BicicletaController::class, 'delete'])->name('delete');
