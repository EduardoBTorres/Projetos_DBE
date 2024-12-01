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

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new BicicletaCollection(Bicicleta::all());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(BicicletaStoreRequest $request)
    {
        try {
            return new BicicletaStoredResource(Bicicleta::create($request->validated()));
        } catch (Exception $error) {
            $this->errorHandler("Erro ao criar Bicicleta!!",$error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicicleta $bicicleta)
    {
        return new BicicletaResource($bicicleta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BicicletaUpdateRequest $request, Bicicleta $bicicleta)//FormRequest
    {
        try {
            $bicicleta->update($request->validated());
            return (new BicicletaResource($bicicleta))
                ->additional(['message' => 'Bicicleta atualizado com sucesso!!']);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar bicicleta!!", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicicleta $bicicleta)
    {
        try {
            $bicicleta->delete();
            return (new BicicletaResource($bicicleta))->additional(["message" => "Bicicleta removido!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover bicicleta!!", $error);
        }
    }
}
