<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BicicletaCollection;
use App\Http\Resources\BicicletaResource;
use App\Models\Bicicleta;
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
    public function store(Request $request)
    {
        $bicicleta = $request->all();

        if(Bicicleta::create($bicicleta)){
            return response()->json(['Bicicleta criada' => '201']);
        } else {
            return response()->json(['Bicicleta não criada' => '500']);
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
