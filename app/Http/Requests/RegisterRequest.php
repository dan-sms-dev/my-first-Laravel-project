<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|max:60|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O campo nome deve conter no máximo 255 caracteres',
            'name.string' => 'O campo nome deve ser um nome válido',

            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um endereço de email válido',
            'email.unique' => 'O email informado já está em uso',

            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha deve ter pelo menos 6 caracteres',
            'password.max' => 'O campo senha não deve exceder 60 caracteres',
            'password.confirmed' => 'As senhas não coincidem',
        ];
    }
}
