<?php

namespace App\Http\Requests;

use App\Rules\LimitProperties;
use Illuminate\Foundation\Http\FormRequest;

class StructureRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address'    => ['required', 'string', 'max:255', 'min:1'],

            'bedrooms'   => ['required', 'integer'],

            'bathrooms'  => ['required', 'integer'],

            'total_area' => ['required', 'integer'],

            'purchased'  => ['required', 'boolean'],

            'value'      => ['required', 'numeric'],

            'discount'   => ['required', 'numeric'],

            'owner_id'   => ['required', 'exists:users,id', new LimitProperties()],

            'expired'    => ['required', 'boolean'],

            'created_at' => ['nullable', 'date', 'date_format:Y-m-d H:i:s'],
        ];
    }
}
