<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RtRequest extends FormRequest
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
            'nama'  => 'required',
            'ketua' => 'required',
            'rw_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required'     => 'Nama RT tidak boleh kosong',
            'ketua.required'    => 'Nama ketua RT tidak boleh kosong',
            'rw_id.required'    => 'Lokasi RW tidak boleh kosong'
        ];
    }
}
