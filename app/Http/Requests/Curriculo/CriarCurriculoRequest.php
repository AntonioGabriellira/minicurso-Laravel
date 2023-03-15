<?php

namespace App\Http\Requests\Curriculo;

use Illuminate\Foundation\Http\FormRequest;

class CriarCurriculoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|max:100|min:2|string',
            'last_name' => 'required|max:100|min:2|string',
            'email' => 'required|unique:curriculos|email',
            'confirmado' => 'required|boolean',
        ];
    }

    public function messages(): array{
        return [
            // first name
            'first_name.required' => 'Preencha com o seu primeiro nome',
            'first_name.max' => 'Preencha com no maximo 100 caracteres',
            'first_name.min' => 'Preencha com no minimo 2 caracteres',
            'first_name.string' => 'Preencha com um texto valido',
        
            'last_name.required' => 'Preencha com o seu ultimo nome',
            'last_name.max' => 'Preencha com no maximo 100 caracteres',
            'last_name.min' => 'Preencha com no minimo 2 caracteres',
            'last_name.string' => 'Preencha com um texto valido',

            'email.required' => 'Preencha o primeiro nome',
            'email.unique' => 'Esse email ja esta sendo utilizado',
            'email.email' => 'Preencha com um email valido',

            'confirmado.requied' => 'Preencha o campo confirmado',
            'confirmado.boolean' => 'Preencha com um dado valido',
        ]
    }
}
