<?php

namespace SistemaControleBar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome'=>'required|max:45',
            'sobrenome'=>'required|max:45',
            'telefone'=>'required|max:10',
            'logradouro'=>'required|max:60',
            'bairro'=>'required|max:45',
            'numero'=>'required|max:10',
            'complemento'=>'required|max:60'


        ];
    }
}
