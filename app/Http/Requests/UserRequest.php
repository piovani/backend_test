<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:1'],
            'email' => ['required', 'unique:users', 'email:rfc,dns', 'max:255', 'min:3']
        ];
    }
}
