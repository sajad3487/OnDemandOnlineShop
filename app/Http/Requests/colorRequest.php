<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class colorRequest extends FormRequest
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
            'code'=>'required | string | between:4,8',
            'name'=>'required | string | between:2,100'
        ];
    }
}
