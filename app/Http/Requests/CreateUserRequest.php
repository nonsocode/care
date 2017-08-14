<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            "first_name" => 'required|min:3',
            "last_name" => 'required|min:3',
            "phone" => 'phone:NG|unique:users',
            "username" => 'unique:users|required|min:4',
            'email' => 'email|required|unique:users',
            "address" => 'max:191',
        ];
    }
}
