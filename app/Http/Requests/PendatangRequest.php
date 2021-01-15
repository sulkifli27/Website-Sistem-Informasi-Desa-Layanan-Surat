<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendatangRequest extends FormRequest
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
            'tgl_datang' => ['required'],
            'asal' => ['required', 'min:5', 'max:30'],

        ];
        if (request()->isMethod('POST')) {
            $rules['no_datang'] = ['required', 'min:5', 'max:10', 'unique:kepindahan,no_pindah'];
            $rules['nik'] = ['required', 'min:16', 'max:16', 'unique:pendatang,nik'];
        }
        return $rules;
    }
}
