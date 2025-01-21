<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileVal extends FormRequest
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
           'first_name' => ['required','string','min:2'],
           'last_name' => ['required','string','min:2'],
           'dob' => ['required','string','min:2'],
           'website' => ['required','string','min:5'],
           'phone' => ['required','string','min:10','max:16'],
           'city' => ['required','string','min:3'],
           'age' => ['required','integer'],
           'degree' => ['required','string','min:2'],
           'email' => ['required','email','min:5'],
           'freelance' => ['required','string'],
           'intro' => ['required','string'],
           'role' => ['required','string'],
        ];
    }
}
