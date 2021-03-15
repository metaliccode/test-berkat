<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sales_orderRequest extends FormRequest
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
            'uuid' => 'required|max:255',
            'customers_id' => 'required|integer',
            'products_id' => 'required|integer',
            'transaction_total' => 'required|integer',
            'transaction_status' => 'required|max:255'
        ];
    }
}
