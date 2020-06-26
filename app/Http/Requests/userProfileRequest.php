<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userProfileRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'tel'=>'required',
                    'address'=>'required|min:0|max:65535'
                ];
                break;

            case 'PUT':
                return [
                    'name'=>'string|nullable',
                    'tel'=>'string|nullable',
                    'address'=>'string|nullable|min:0|max:65535'
                ];
                break;
        }

    }
}
