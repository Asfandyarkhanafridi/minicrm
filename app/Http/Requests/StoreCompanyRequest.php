<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'image' => 'dimensions:width=100,height=100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Company Name is required!',
            'image.dimensions' => 'Logo should be 100*100!'
        ];
    }
}
