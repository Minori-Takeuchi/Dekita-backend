<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if($this->getMethod() == 'PUT')
        {
            return [
                'id' => 'string|required',
                'notice' => 'in:0,1|required',
            ];
        } else {
            return [
                'id' => 'string|unique:users|required',
                'email' => 'email|unique:users|required',
                'notice' => 'in:0,1|required',
            ];
        }
    }
}
