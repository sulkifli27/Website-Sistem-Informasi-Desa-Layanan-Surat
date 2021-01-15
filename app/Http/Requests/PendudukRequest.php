<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
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
        $rules = [
            'no_kk' => ['required', 'min:16', 'max:16'],
            'nama_lengkap' => ['required', 'min:3', 'max:30'],
            'tempat_lahir' => ['required', 'min:3', 'max:15'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required', 'min:3', 'max:15'],
            'pendidikan' => ['required', 'min:2', 'max:10'],
            'pekerjaan' => ['required', 'min:3', 'max:15'],
            'status' => ['required', 'min:5', 'max:15'],
            'status_keluarga' => ['required', 'min:3', 'max:15'],
            'golongan_darah' => ['required', 'max:3'],
            'kewarganegaraan' =>  ['required', 'min:5', 'max:10'],
            'nama_ayah' => ['required', 'min:3', 'max:30'],
            'nama_ibu' => ['required', 'min:3', 'max:30'],
        ];
        if (request()->isMethod('POST')) {
            $rules['nik'] = ['required', 'min:16', 'max:16', 'unique:penduduk,nik'];
            $rules['email'] = ['nullable', 'min:5', 'max:40', 'unique:penduduk,email'];
            $rules['no_hp'] = ['nullable', 'min:10', 'max:12', 'unique:penduduk,no_hp'];
        }
        return $rules;
    }
}
