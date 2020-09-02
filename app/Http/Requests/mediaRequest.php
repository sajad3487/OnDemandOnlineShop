<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mediaRequest extends FormRequest
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
                    'file' => 'required|mimes:jpg,jpeg,png,gif|max:20240',
                    'title' => 'required|string|between:2,200',
                    'alternative_text' => 'nullable|string|between:2,200',
                    'caption' => 'nullable|string|between:2,200',
                    'owner_id' => 'nullable|numeric',
                    'type' => 'nullable|string|between:2,200',
                ];
                break;

            case 'PUT':
                return [
                    'file' => 'mimes:jpg,jpeg,png,gif|max:20240',
                    'title' => 'required|string|between:2,200',
                    'alternative_text' => 'nullable|string|between:2,200',
                    'caption' => 'nullable|string|between:2,200',
                    'owner_id' => 'nullable|numeric',
                    'type' => 'nullable|string|between:2,200',
                ];
                break;
        }
    }
}
