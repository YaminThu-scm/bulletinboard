<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'current-password' => 'required',
            'new-password' => [
                'required', 'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers(),
            ],
            'new-password_confirmation'  => 'required_with:new-password|same:new-password|min:8',
        ];
    }
}
