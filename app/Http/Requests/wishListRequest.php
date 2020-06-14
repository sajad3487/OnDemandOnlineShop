<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class wishListRequest extends FormRequest
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
            'link'=>'required|min:0|max:65535',
            'description'=>'min:0|max:65535',
        ];
    }
}
