<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\BicicletaStoreRequest;
use App\Http\Resources\BicicletaCollection;
use App\Http\Resources\BicicletaResource;
use App\Models\Bicicleta;
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
            return new BicicletaStoreRequest(Bicicleta::create($request->validated()));
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
    public function update(Request $request, Bicicleta $bicicleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicicleta $bicicleta)
    {
        //
    }
}
