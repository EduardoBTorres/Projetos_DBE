<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\BicicletaStoreRequest;
use App\Http\Requests\BicicletaUpdateRequest;
use App\Http\Resources\BicicletaCollection;
use App\Http\Resources\BicicletaResource;
use App\Http\Resources\BicicletaStoredResource;
use App\Http\Resources\UserResource;
use App\Models\Bicicleta;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new BicicletaCollection(Bicicleta::where('user_id', Auth::user()->id)->get());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(BicicletaStoreRequest $request)
    {
        try {
            // Valida os dados da requisição
            $validated = $request->validated();

            // Define o user_id automaticamente
            $validated['user_id'] = $request->user()->id;

            // Cria a atividade com os dados validados
            return new BicicletaStoredResource(Bicicleta::create($validated));
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao criar Bicicleta!!", $error);
        }

        // try {
        //     return new BicicletaStoredResource(Bicicleta::create($request->validated()));
        // } catch (Exception $error) {
        //     $this->errorHandler("Erro ao criar Bicicleta!!",$error);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicicleta $bicicleta)
    {
        // Verifica se a bicicleta pertence ao usuário logado
        if ($bicicleta->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        return new BicicletaResource($bicicleta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BicicletaUpdateRequest $request, Bicicleta $bicicleta)//FormRequest
    {
        // Verifica se a bicicleta pertence ao usuário logado
        if ($bicicleta->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        try {
            $bicicleta->update($request->validated());
            return (new BicicletaResource($bicicleta))
                ->additional(['message' => 'Bicicleta atualizada com sucesso!']);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar bicicleta!!", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicicleta $bicicleta)
    {
        // Verifica se a bicicleta pertence ao usuário logado
        if ($bicicleta->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        try {
            $bicicleta->delete();
            return (new BicicletaResource($bicicleta))->additional(["message" => "Bicicleta removida!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover bicicleta!!", $error);
        }
    }
}
