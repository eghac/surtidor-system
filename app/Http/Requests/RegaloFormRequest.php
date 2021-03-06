<?php

namespace sisSurtidor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegaloFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cantidad'=>'numeric',
            'descripcion'=>'max:50',
            'valor'=>'numeric',
        ];
    }
}
