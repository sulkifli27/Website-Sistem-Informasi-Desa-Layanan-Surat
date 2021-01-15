<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KematianRequest extends FormRequest
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
            'tgl_meninggal' => ['required'],
            'umur' => ['required', 'max:2'],
            'sebab' => ['required', 'min:3', 'max:40'],
            'tempat_makam' => ['required', 'min:3', 'max:25'],
            'tempat_meninggal' => ['required', 'min:3', 'max:25'],

        ];
        if (request()->isMethod('POST')) {
            $rules['no_kematian'] = ['required', 'min:5', 'max:10', 'unique:kematian,no_kematian'];
            $rules['nik'] = ['required', 'min:16', 'max:16', 'unique:kematian,nik'];
        }
        return $rules;
    }
}
