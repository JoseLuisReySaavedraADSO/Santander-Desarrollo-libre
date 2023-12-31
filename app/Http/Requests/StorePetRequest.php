<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // dd($this->all());

        // DATOS REQUERIDOS
        return [
            'name' => 'required | max:100',
            'raza' => 'max:100',
            'categoria' => 'max:100',
            'photo' => 'max:100',
            'genero' => 'max:100',
        ];
    }
}
