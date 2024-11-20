<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonResource;

class BicicletaStoredResource extends BicicletaResource
{
    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,'Bicicleta Criada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Bicicleta criada com sucesso!!',
        ];
    }
}
