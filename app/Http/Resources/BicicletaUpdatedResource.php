<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BicicletaUpdatedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,'Bicicleta Atualizada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Bicicleta atualizada com sucesso!!',
        ];
    }
}
