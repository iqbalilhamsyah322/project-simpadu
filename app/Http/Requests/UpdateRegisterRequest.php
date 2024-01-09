<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegisterRequest extends FormRequest
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
            'nama' => 'required|string|max:80',
            'ktp' => 'required|string|max:80',
            'tanggal' => 'string',
            'agama' => 'string',
            'pendidikan' => 'string',
            'pekerjaan' => 'string',
            'penghasilan' => 'string',
            'status' => 'string',
            'alamat' => 'string',
            'no_hp' => 'string',
            'provinsi' => 'string',
            'kab' => 'string',
            'kec' => 'string',
            'kel' => 'string',
        ];
    }
}
