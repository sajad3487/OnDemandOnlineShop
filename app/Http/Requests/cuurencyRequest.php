<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cuurencyRequest extends FormRequest
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
            'usd' => 'required | integer',
            'euro' => 'required | integer ',
            'pound' => 'required | integer ',
            'canada_dollar' => 'required | integer ',
            'uae' => 'required | integer ',
            'tl' => 'required | integer ',
        ];
    }
}
