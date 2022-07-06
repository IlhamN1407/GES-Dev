<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPenawaran extends FormRequest
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
            'email' => 'required|email:dns|unique:tb_penawaran',
            'nama_PT' => 'required',
            'Alamat' => 'required|min:10',
            'Perihal' => 'min:10',
            'No_HP' => 'required',
        ];
    }
}
