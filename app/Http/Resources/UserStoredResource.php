<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonResource;

class UserStoredResource extends UserResource
{
    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,'User Criado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'User criado com sucesso!!',
        ];
    }
}
