<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KkRequest extends FormRequest
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
            'dusun' => ['required', 'min:3', 'max:15'],
            'rt' => ['required', 'max:3'],
            'rw' => ['required', 'max:3'],
            'desa' => ['required', 'min:3', 'max:20'],
            'kecamatan' => ['required', 'min:8', 'max:20'],
            'kabupaten' => ['required', 'min:6', 'max:10'],
            'provinsi' => ['required', 'max:16'],
        ];

        if (request()->isMethod('POST')) {
            $rules['no_kk'] = ['required', 'min:16', 'max:16', 'unique:kk,no_kk'];
        }
        return $rules;
    }
}
