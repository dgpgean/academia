<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAndUpdateUser extends FormRequest
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

        $rules = [
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required|unique:users',
            'sex' => 'required',
            'password' => 'required',
        ];
        if ($this->method() == 'PUT') {
            $rules = [
                'email' => ['required', Rule::unique('users')->ignore($this->id)],
            ];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome do usuário',
            'birthday.required' => 'Data de nascimento',
            'email.required' => 'E-mail',
            'sex.required' => 'sexo',
            'password.required' => 'Senha',
            'unique' => 'Email já cadastrado'
        ];
    }
}
