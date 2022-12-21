<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'company_id' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'Employee First Name is required!',
            'lastName.required' => 'Employee Last Name is required!',
            'company_id.required' => 'Company  is required!'
        ];
    }
}
