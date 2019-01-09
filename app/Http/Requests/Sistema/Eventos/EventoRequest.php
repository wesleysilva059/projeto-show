<?php

namespace App\Http\Requests\Sistema\Eventos;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
          'cidade_id' => 'required|int|exists:city,id',
          'artista_id' => 'required|int|exists:artistas,id',
          'nome' => 'required|string|min:5',
          'resumo' => 'required|string|min:20',
          'imagem' =>   'required|url'
        ];
    }

    public function messages()
    {
      return [
        'nome.min' => 'O Nome do Evento deve possuir ao menos 5 caracteres!',
        'imagem.required' => 'A imagem é obrigatória!',
      ];
    }
}
