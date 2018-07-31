<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
            //
            'nome'=>'required|max:100',
            'email'=>'required|max:100',
            'idAparelho'=>'required|max:100',
            'telefone'=>'required|max:50',
            'placaDoCarro'=>'required|max:20'
        ];
    }
}
