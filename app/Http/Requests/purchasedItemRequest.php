<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class purchasedItemRequest extends FormRequest
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
            'purchased_date'=>'nullable | date |date_format:Y-m-d',
            'buyer'=>'nullable | string',
            'purchased_number'=>'nullable | string',
            'purchased_price'=>'nullable | integer',
            'received_date'=>'nullable | date |date_format:Y-m-d',
            'co_worker'=>'nullable | string',
            'sending_date'=>'nullable | date |date_format:Y-m-d',
            'passenger'=>'nullable | string',
            'arrival_date'=>'nullable | date |date_format:Y-m-d',
            'delivered_date'=>'nullable | date |date_format:Y-m-d',
        ];
    }
}
