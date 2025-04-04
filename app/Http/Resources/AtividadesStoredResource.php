<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonResource;

class AtividadesStoredResource extends AtividadesResource
{
    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,'Atividade Criada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Atividade criado com sucesso!!',
        ];
    }
}
