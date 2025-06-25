<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReCaptcha;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:8',
            'password_confirmation' => 'required|same:password',
            'g-recaptcha-response' => ['required', new ReCaptcha],
            
        ];
    }


    public function messages(){
        
        return [

            'name.required' => 'Ismni kiriting',
            'email.required' => 'Elektron pochtangizni kiriting',
            'password.required' => 'Parolni kiriting kamida 8ta belgi kiritish lozim',
            'password.min' => 'Kamida 8ta belgi kiriting',
            'password_confirmation.required' => 'Parolni tasdiqlang',
            'password_confirmation.same' => 'Parolni tasdiqlash maydoni parolga mos kelishi kerak', 
        ];
    }
}
