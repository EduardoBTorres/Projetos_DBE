<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadesUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'nullable|max:20', // Definindo maximo para 255
            'endereco' => 'nullable|max:20',  // Corrigindo de "endereco" para "local"
            'distancia' => 'nullable|numeric|min:1',
            'tempo' => 'nullable|max:30',
            'data' => 'nullable|date',
            'descricao' => 'nullable|max:100',
        ];
    }
}

