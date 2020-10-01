<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlayerProfile extends FormRequest
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
            'firstname' => 'required|regex:/^[a-zA-Z]+$/u|string|max:191',
            'lastname' => 'required|regex:/^[a-zA-Z]+$/u|string|max:191',
            'mobile' => 'digits:10|numeric',
            'birthday' => 'required|date|date_format:Y-m-d|before:13 years ago',
            'gender' => 'required',
            'nic' => 'required|regex:/^[0-9]{9}[vVxX]$/',
            'address' => 'required|string',
            'weight' => 'required|string',
            'height' => "required|string",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'firstname.required' => 'Please enter your first name.',
            'firstname.regex' => 'Please enter your valid First Name.',
            'lastname.required' => 'Please enter your last name.',
            'lastname.regex' => 'Please enter your valid last Name.',
            'address.required' => 'Please enter your address.',
            'birthday.required' => 'Please enter your birthday.',
            'birthday.date_format' => 'The birthday does not match the format YYYY-MM-DD. (Ex: 1995-06-25)',
            'birthday.before' => 'You must be at least 13 years old',
            'mobile.required' => 'Please enter your phone number.',
            'mobile.digits' => 'Your phone number must be 10 digits and enter valid phone number.',
            'nic.required' => 'Please enter your NIC.',
            'gender.required' => 'Please select your gender.',
            'height.required' => 'Please enter your height.',
            /*'height.regex' => 'The height does not match the format. (Ex: 7\'11")',*/
            'weight.required' => 'Please enter your weight.',
            /*'weight.regex' => 'The weight does not match the format. (Ex: 45kg 4g)',*/
        ];
    }
}
