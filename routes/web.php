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
Route::controller(BicicletaController::class)->group(function () {
    Route::prefix('/bicicletas')->group(function () {
        Route::get('/', 'index')->name("bicicleta.index");
        Route::get('/{id}','show')->name('bicicleta.show');
    });

    Route::prefix('/bicicleta')->group(function () {
        Route::get('/','create')->name('bicicleta.create');
        Route::post('/','store')->name('bicicleta.store');
        Route::get('/{id}/edit', 'edit')->name('bicicleta.edit');
        Route::get('/{id}/update','update')->name('bicicleta.update');
        Route::get('/{id}/delete','delete')->name('bicicleta.delete');
        Route::post('/{id}/remove','remove')->name('bicicleta.remove');

    });
});

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
