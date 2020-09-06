<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageInfoRequest extends FormRequest
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
            'type'=>'required|string|in:slider',
            'file'=>'nullable|mimes:jpg,jpeg,png,gif|max:20240',
            'title'=>'nullable|string|between:2,100',
            'subtitle'=>'nullable|string|between:2,100',
            'second_subtitle'=>'nullable|string|between:2,100',
            'button_text'=>'nullable|string|between:2,20',
            'button_link'=>'nullable|string|between:2,255',
            'media_path'=>'nullable|string|between:2,255',
            'status'=>'nullable|string|in:on,off',
        ];
    }
}
