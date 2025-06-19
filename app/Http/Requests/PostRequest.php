<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|max:255',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:5100',
            'short_content' => 'required|min:50|max:255',
            'content' => 'required|min:255',
        ];
    }

    public function messages(){

        return [

            'title.required' => 'Sarlavha kiritilsin',
            'title.max' => 'Sarlavha 255ta belgidan oshmasin',
            'image.max' => 'Rasmni 5mb dan oshmasin',
            'image.mimes' => 'Rasm quyidagi tiplardan biri bo\'lishi kerak jpg,png yoki jpeg',
            'image.required' => 'Rasm yuklansin',
            'short_content.min' => 'Qisqa izoh 50ta belgidan oshishi kerak',
            'short_content.max' => 'Qisqa izoh maksimal 255ta belgigacha kiritilishi kerak',
            'short_content.required' => 'Qisqa izoh kiritilsin',
            'content.required' => 'Izohni kiriting',
            'content.min' => 'Izoh kamida 255ta belgi kiritilishi kerak',
        ];
    }
}
