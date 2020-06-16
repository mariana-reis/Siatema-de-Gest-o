<?php

namespace SistemaControleBar\Http\Requests;

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
            'nome' => 'max:45',
            'email' => 'max:45',
            'senha' => 'max:128',
            'status' => 'max:10',
            'cargo' => 'max:45',
            'tipo_usuario' => 'max:45'
        ];
    }
}
