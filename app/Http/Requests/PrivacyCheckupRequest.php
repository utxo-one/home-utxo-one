<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrivacyCheckupRequest extends FormRequest
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
            'email' => 'required',
            'vpn' => 'required',
            'data' => 'required',
            'bitcoin' => 'required',
            'accounts' => 'required',
            'computer' => 'required',
            'amazon' => 'required',
            'social' => 'required',
            'search' => 'required',
        ];
    }
}
