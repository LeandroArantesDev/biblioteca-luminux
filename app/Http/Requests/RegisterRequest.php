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
            'name' => 'string|required|min:3|max:100',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome deve ter pelo menos 3 caracteres',
            'name.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'name.string' => 'O campo nome deve ser um texto',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'email.max' => 'O campo email deve ter no máximo 150 caracteres',
            'email.unique' => 'O email já está cadastrado',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha deve ter pelo menos 6 caracteres',
            'password.confirmed' => 'As senhas não coincidem',
        ];
    }
}
