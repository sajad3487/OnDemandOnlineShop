<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
                    'link' => 'required|max:5000',
                    'quantity' => 'required',
                    'description' => 'min:0|max:65535',
                    'rules' => 'required',
                ];
                break;

            case 'PUT':
                return [
                    'currency_id' => 'required| string',
                    'item_price' => 'required',
                    'shipping_price' => 'required',
                    'commission' => 'required',
                ];
                break;
        }

    }
}
