<?php

namespace SistemaControleBar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorFormRequest extends FormRequest
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
            'nome'=>'max:45',
            'sobrenome'=>'max:45',
            'endereco'=>'max:60',
            'bairro'=>'max:60',
            'cidade'=>'max:60',
            'telefone'=>'max:10',
            'celular'=>'max:10'


        ];
    }
}
