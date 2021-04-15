<?php

namespace App\Http\Requests;

use App\Rules\AvailableDisplayType;
use Illuminate\Foundation\Http\FormRequest;

class DisplayRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reseller_id' => [
                'required',
                'numeric',
                'exists:resellers,id'
            ],
            'type' => [
                'required',
                'string',
                'max:21',
                new AvailableDisplayType()
            ],
            'serial_number' => [
                'required',
                'unique:displays,serial_number',
                'string',
                'max:20'
            ],
            'attachment' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg'
            ]
        ];
    }
}
