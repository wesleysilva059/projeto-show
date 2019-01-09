<?php

namespace App\Http\Requests\Sistema\Artistas;

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
          'email' => 'required|email|unique:artistas',
          'facebook' => 'required|url',
          'site' => 'required|url',
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
      ];
    }
}
