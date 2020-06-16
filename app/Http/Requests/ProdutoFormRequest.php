<?php

namespace SistemaControleBar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
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
            'tipo_produto'=>'required|max:45',
            'nome'=>'max:45',
            'preco',
            'quantidade_estoque'=>'max:45'
        ];
    }


}
