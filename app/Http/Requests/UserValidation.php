<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'f_name' => 'string | required',
            'l_name' => 'string | required',
            'phone' => 'string | required | max: 11',
            'email' => 'string | required',
            'designation_id' => 'string | required',
            'salary' => 'string | required',
            'permanent_address' => 'string | required',
            'present_address' => 'string | required',
            'password' => 'string | required | min:8'
        ];
    }
}
