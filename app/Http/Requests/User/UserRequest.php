<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'image' => 'nullable|image'
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Kami butuh sebuah gambar',
            'image.image' => 'yang di pilih harus gambar',
            'name.required' => 'Kami butuh nama',
            'name.string' => 'nama tidak boleh mengandung angka',
            'name.max' => 'nama tidak boleh lebih dari 20 huruf',
        ];
    }
}
