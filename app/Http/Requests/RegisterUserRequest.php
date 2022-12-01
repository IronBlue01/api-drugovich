<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'level' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'O campo :attribute é obrigatório',
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'O nome do gerente.',
                'example' => 'José Silva',
            ],
            'email' => [
                'description' => 'E-mail do gerente.',
                'example' => 'jose@gmail.com',
            ],
            'password' => [
                'description' => 'Senha do gerente.',
                'example' => '1234abc',
            ],
            'password_confirmation' => [
                'description' => 'Senha do gerente deve ser enviada duas vezes para confirmação.',
                'example' => '1234abc',
            ],
            'level' => [
                'description' => 'Nivel de acesso do gerente dentro do sistema, sendo possível nível 1 ou 2.',
                'example' => 2,
            ]
        ];
    }

}
