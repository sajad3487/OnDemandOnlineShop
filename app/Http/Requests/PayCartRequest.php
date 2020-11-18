<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayCartRequest extends FormRequest
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
            'tel'=>'required|string|between:7,10',
            'address'=>'required|string|between:2,250',
        ];
    }
}
