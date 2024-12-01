<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BicicletaUpdateRequest extends FormRequest
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
            'marca' => 'nullable | max:20',
            'modelo' => 'nullable | max:300',
            'aro' => 'nullable | numeric | min:1',
            'cor' => 'nullable | max:20',
        ];
    }
}
