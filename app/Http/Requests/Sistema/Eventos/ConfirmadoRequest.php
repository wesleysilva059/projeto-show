<?php

namespace App\Http\Requests\Sistema\Eventos;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmadoRequest extends FormRequest
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
        'nome' => 'required|string|min:10',
        'data_evento' => 'required|date_format:d/m/Y',
        'data_arrecadacao'  => 'required|date_format:d/m/Y|before:data_evento',
        'capacidade'  => 'required|integer|min:1',
        'local' => 'required|string|min:3',
        'cidade'  => 'required|string|min:3',
        'uf'  => 'required|string|min:2|max:2',
        'valor' => 'required|regex:/^[\d.,]+$/',
        'nome_ingresso.*' => 'required|string|min:3',
        'qtd_ingresso.*'  => 'required|integer|min:1',
        'valor_ingresso.*'  => 'required|regex:/^[\d.,]+$/'
      ];
    }

    public function messages(){
      return [
        'data_arrecadacao.before' => 'A Data de Encerramento da Arrecadação deve ser MENOR que a data do evento',
      ];
    }
}
