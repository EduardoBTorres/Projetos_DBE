<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadesStoreRequest extends FormRequest
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
            "titulo"=>"required | max:20",
            "endereco"=>"required | max:300",
            "distancia"=>"required | numeric | min:1",
            "tempo"=>"required | numeric | min:1.99",
            "data"=>"required | date",
            "descricao"=>"required | max:300",
        ];
    }
}
