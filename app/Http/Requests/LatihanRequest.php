<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LatihanRequest extends FormRequest
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
            'emails.*' => 'nullable|email|distinct',
            'emails.0' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'emails.*.required' => 'Kami butuh alamat email',
            'emails.*.email' => 'Ini bukan email',
            'emails.*.distinct' => 'Ada alamat email yang sama',
        ];
    }
}
