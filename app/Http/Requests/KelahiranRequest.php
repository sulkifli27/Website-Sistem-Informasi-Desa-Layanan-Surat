<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelahiranRequest extends FormRequest
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
            'no_kelahiran' => ['required', 'min:3', 'max:16'],
            'nama_bayi' => ['required', 'min:3', 'max:30'],
            'tempat_lahir' => ['required', 'min:3', 'max:15'],
            'tgl_lahir' => ['required'],
            'berat' => ['required'],
            'jenis_kelamin' => ['required'],
            'nama_ayah' => ['required', 'min:3', 'max:30'],
            'nama_ibu' => ['required', 'min:3', 'max:30'],
            'alamat' => ['required', 'min:3', 'max:20'],
            'nama_pelapor' => ['required', 'min:3', 'max:30'],
        ];
        if (request()->isMethod('POST')) {
            $rules['no_kelahiran'] = ['required', 'min:5', 'max:10', 'unique:kelahiran,no_kelahiran'];
        }
        return $rules;
    }
}
