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
use Illuminate\Support\Facades\Auth;

class AtividadesController extends Controller
{
    public function index()
    {
        return new AtividadesCollection(Atividades::where('user_id', Auth::user()->id)->get());
    }

     public function store(AtividadesStoreRequest $request)
     {
         try {

             $validated = $request->validated();
             $validated['user_id'] = $request->user()->id;

             return new AtividadesStoredResource(Atividades::create($validated));
         } catch (Exception $error) {
             return $this->errorHandler("Erro ao criar Atividade!!", $error);
         }
     }

    public function show(Atividades $atividade)
    {
       if ($atividade->user_id !== Auth::user()->id) {
        return response()->json(['error' => 'Acesso não autorizado!'], 403);
    }

    return new AtividadesResource($atividade);

    }

    public function update(AtividadesUpdateRequest $request, Atividades $atividade)
    {
         if ($atividade->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        try {
            $atividade->update($request->validated());
            return (new AtividadesResource($atividade))
                ->additional(['message' => 'Atividade atualizada com sucesso!']);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar atividade!!", $error);
        }

    }

    public function destroy(Atividades $atividade)
    {
         if ($atividade->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        try {
            $atividade->delete();
            return (new AtividadesResource($atividade))->additional(["message" => "Atividade removida!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover atividade!!", $error);
        }

    }
}
