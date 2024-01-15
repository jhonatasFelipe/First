<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirstUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            'password_confirm' => 'required|same:password'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [

            // name
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O tamanho minímo do campo name é 3',
            'name.max' => 'O tamanho máximo do campo name é 50',

            // email
            'email.required' => 'O campo e-mail é obrigatório',
            'email.mail' => 'insira um e-mail valido',

            // password
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O tamanho minímo da senha é 6',
            'password.max' => 'O tamanho máximo da senha é 20',

            // password_confirm
            'password_confirm.required' => 'O campo confirmação de senha é obrigatório',
            'password_confirm.same' => 'A confirmação de senha  deve ser igual ao campo senha',
            
        ];
    }
}
