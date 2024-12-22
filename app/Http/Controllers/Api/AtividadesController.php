<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AtividadesStoreRequest;
use App\Http\Requests\AtividadesUpdateRequest;
use App\Http\Resources\AtividadesCollection;
use App\Http\Resources\AtividadesResource;
use App\Http\Resources\AtividadesStoredResource;
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
             // Valida os dados da requisição
             $validated = $request->validated();

             // Define o user_id automaticamente
             $validated['user_id'] = $request->user()->id;

             // Cria a atividade com os dados validados
             return new AtividadesStoredResource(Atividades::create($validated));
         } catch (Exception $error) {
             return $this->errorHandler("Erro ao criar Atividade!!", $error);
         }
     }


    /**
     * Display the specified resource.
     */
    public function show(Atividades $atividade)
    {
        return new AtividadesResource($atividade);
        // try {// Valida os dados da requisição
        // $validated = $request->validated();

        // // Define o user_id automaticamente
        // $validated['user_id'] = $request->user()->id;
        // return new AtividadesResource($atividade);
        // } catch (Exception $error) {
        //     return $this->errorHandler("Erro ao visualizar Atividade!!", $error);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AtividadesUpdateRequest $request, Atividades $atividade)//FormRequest
    {
        try {
            $atividade->update($request->validated());
            return (new AtividadesResource($atividade))
                ->additional(['message' => 'Atividade atualizado com sucesso!!']);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar atividade!!", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atividades $atividade)
    {
        try {
            $atividade->delete();
            if (!$atividade) {
                 throw new Exception("Atividade nao encontrada!!");
            }
            return (new AtividadesResource($atividade))->additional(["message" => "Atividade removida!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover atividade!!", $error);
        }
    }
}
