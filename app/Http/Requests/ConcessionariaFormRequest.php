<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcessionariaFormRequest extends FormRequest
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
            'endereco'=>'required|max:255',
            'numero'=>'max:15',
            'bairro'=>'max:45',
            'cidade'=>'max:50',
            'uf'=>'max:2',
            'complemento'=>'max:45',
            'cep'=>'max:8',
            'telefone'=>'required|max:100'
        ];
    }
}
