<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
            'title'=>'required | between : 2,255',
            'subtitle'=>'required | between : 2,255',
            'brand'=>' between : 2,255',
            'description'=>'nullable',
            'spec'=>'nullable',
            'category_id'=>'required',
            'child'=>'nullable',
            'grandChild'=>'nullable',
            'tags'=>'nullable',
            'price'=>'required|integer',
            'discount'=>'integer | between : 0,100',
            'delivery_time'=>'required|integer',
            'status'=>'required|integer | between:0,10',
            'stock'=>'integer|required',
        ];
    }
}
