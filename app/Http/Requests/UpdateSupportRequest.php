<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupportRequest extends FormRequest
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
        if ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            return [
                'subject' => [
                    'required',
                    'string',
                    'min:5',
                    'max:255',
                    Rule::unique('supports')->ignore($this->support ?? $this->id)
                ],
                'body' => ['required', 'string', 'min:5', 'max:10000'],
            ];
        }
    }
}
