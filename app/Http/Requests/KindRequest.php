<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KindRequest extends Request
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
            "symbol" => "required",
            "description" => "required",
        ];
    }
    /**
     * Overrite messages
     * 
     * @return array message
     */
    function messages()
    {
        return [
            "symbol.required" => ":attribute bắt buộc",
            "description.required" => ":attribute bắt buộc"
        ];
        
    }
    /**
     * Overrite function attribute
     * 
     * @return array attributes
     */
    function attributes()
    {
        return [
            "symbol" => "Ký hiệu",
            "description" => "Tính chất đối tượng"
        ];
        
    }
}
