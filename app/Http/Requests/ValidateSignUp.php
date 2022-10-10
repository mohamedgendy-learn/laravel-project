<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSignUp extends FormRequest
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
            'name'=>'required|string|min:6',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            're_pass'=>'required|same:password|min:6',
            'agree-term'=>'required'
        ];
    }

    public function messages()
    {
        return [
            're_pass.same'=>'password does not match',
            'agree-term.required'=>'you have to accept terms '
        ];
    }
}
