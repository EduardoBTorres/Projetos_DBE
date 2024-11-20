<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AtividadesStoreRequest;
use App\Http\Resources\AtividadesCollection;
use App\Http\Resources\AtividadesResource;
use App\Models\Atividades;
use Exception;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AtividadesCollection(Atividades::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AtividadesStoreRequest $request)
    {
        try {
            return new AtividadesStoreRequest(Atividades::create($request->validated()));
        } catch (Exception $error) {
            $this->errorHandler("Erro ao criar Atividade!!",$error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Atividades $atividades)
    {
        return new AtividadesResource($atividades);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atividades $atividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atividades $atividades)
    {
        //
    }
}
