<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $email = $this->getMethod() === 'POST' ?
            'required|email|max:100|unique:users,email' :
            ['sometimes', 'email', 'max:100', Rule::unique('users')->ignore($this->route('user'))];

        return [
            'name'     => 'required|string|max:50',
            'email'    => $email,
            'password' => 'required|string|min:8|max:50',
        ];
    }
}
