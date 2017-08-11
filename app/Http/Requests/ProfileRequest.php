<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            "phone" => [
                'phone:NG',
                'required',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
            "username" => [
                'required', 
                'min:4',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
            "address" => 'max:191',
        ];
    }
}
