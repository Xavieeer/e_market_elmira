<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepelangganRequest extends FormRequest
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
        return [
            'nama' => ['required', 'string'],
            'kode_pelanggan' => ['required'],
            'no_telp' => ['required', ],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
        ];
    }

    public function messages()
{
    return [
        
    ];
}
}
