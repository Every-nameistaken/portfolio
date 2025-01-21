<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactVal extends FormRequest
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
            'name' => ['required','max:50','min:2','string'],
            'email' => ['required','max:50','min:2','email'],
            'subject' => ['required','max:150','min:2','string'],
            'message' => ['required','max:500','min:2'],
        ];
    }
}
