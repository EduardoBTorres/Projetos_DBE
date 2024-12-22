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
    public function index()
    {
        return new BicicletaCollection(Bicicleta::where('user_id', Auth::user()->id)->get());
    }


    public function store(BicicletaStoreRequest $request)
    {
        try {
            $validated = $request->validated();
            $validated['user_id'] = $request->user()->id;

            return new BicicletaStoredResource(Bicicleta::create($validated));
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao criar Bicicleta!!", $error);
        }

    }

    public function show(Bicicleta $bicicleta)
    {
        if ($bicicleta->user_id !== Auth::user()->id) {
            return response()->json(['error' => 'Acesso não autorizado!'], 403);
        }

        return new BicicletaResource($bicicleta);
    }

    public function update(BicicletaUpdateRequest $request, Bicicleta $bicicleta)
    {
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

    public function destroy(Bicicleta $bicicleta)
    {
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
