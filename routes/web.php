<?php

use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\BicicletaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//BICICLETA
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


//ATIVIDADES
Route::get('/atividades', [AtividadesController::class,'index']);

Route::get('/atividade/{id}', [AtividadesController::class, 'show'])->name('show');

//Rotas de CREATE
Route::get('/atividade', [AtividadesController::class, 'create']);

Route::post('/atividade', [AtividadesController::class, 'store']);

//Rotas de UPDATE
Route::get('/atividade/{id}/edit', [AtividadesController::class, 'edit'])->name('edit');

Route::post('/atividade/{id}/update', [AtividadesController::class, 'update'])->name('update');

//Rota de DELETE
Route::get('/atividade/{id}/delete', [AtividadesController::class, 'delete'])->name('delete');

Route::post('/atividade/{id}/delete', [AtividadesController::class, 'remove'])->name('remove');


//USERS
Route::get('/users', [UserController::class,'index']);

Route::get('/user/{id}', [UserController::class, 'show'])->name('show');

//Rotas de CREATE
Route::get('/user', [UserController::class, 'create']);

Route::post('/user', [UserController::class, 'store']);

//Rotas de UPDATE
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edit');

Route::post('/user/{id}/update', [UserController::class, 'update'])->name('update');

//Rota de DELETE
Route::get('/user/{id}/delete', [UserController::class, 'delete'])->name('delete');

Route::post('/user/{id}/delete', [UserController::class, 'remove'])->name('remove');
