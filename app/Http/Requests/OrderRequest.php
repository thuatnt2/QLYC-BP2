<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
            "number_cv" => "required",
            "number_cv_pa71" => "required",
            "order_name" => "required",
            "customer_name" => "required",
            "customer_phone" => "required",
        ];
    }
}
