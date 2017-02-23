<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShipRequest extends Request
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
            "order_id" => "required",
            "order_id" => "required",
            "number_cv_pa71" => "required",
            "number_news" => "required",
            "number_page" => "required",
            "file_name" => "required",
            "receive_name" => "required",
            "date_submit" => "required",
        ];
    }
}
