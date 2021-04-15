<?php

namespace App\Http\Requests;

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
            'reseller_id' => 'required|numeric|exists:resellers,id',
            'type' => 'required|string|max:21',
            'serial_number' => 'required|unique:displays,serial_number|string|max:20',
            'attachment' => 'image'
        ];
    }
}
