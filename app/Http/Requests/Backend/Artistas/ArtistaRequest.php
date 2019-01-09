<?php

namespace App\Http\Requests\Backend\Artistas;

use Illuminate\Foundation\Http\FormRequest;

class ArtistaRequest extends FormRequest
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
          'nome' => 'required|min:2',
          'email' => 'required|email|unique:artistas,id,'.$this->id,
          'responsavel' => 'required|string|min:2',
          'celular' => 'required|string|min:14',
          'cep' => 'sometimes|string|size:9',
          'logradouro' => 'sometimes|string|min:2',
          'numero' => 'sometimes|string|min:1',
          'bairro'  =>  'sometimes|string|min:2',
          'cidade'  => 'sometimes|numeric',
          'uf'  => 'sometimes|string|size:2',
          'facebook' => 'sometimes|url',
          'site' => 'sometimes|url',
          'quantidade_minima_fans' => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
      return [
        'nome.min' => 'O campo Nome deve possuir ao menos 2 caracteres!',
        'email.email' => 'Por favor, informe um E-mail válido!',
        'email.unique' => 'Este e-mail já existe em nosso banco de dados!',
        'facebook.url' => 'O Link do Facebook deve ser uma url válida!',
        'site.url' => 'O Link do Site deve ser uma url válida!',
        'quantidade_minima_fans.min' => 'A Qauntidade Mínima de Fãs deve ser maior que 0!',
      ];
    }
}
