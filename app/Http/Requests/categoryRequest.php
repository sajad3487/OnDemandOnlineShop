<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
                return [
                    'title'=>'required|string|between: 2,100',
                    'status'=>'required|string|in:0,1',
                    'parent_id'=>'nullable|numeric| exists:categories,id|min: 2',
                ];
                break;

            case 'DELETE':
                return [
                    'type'=>'string|in:category,child,grandChild',
                    'category_id'=>'required|numeric| exists:categories,id|min:2',
                ];
                break;
        }

    }
}
