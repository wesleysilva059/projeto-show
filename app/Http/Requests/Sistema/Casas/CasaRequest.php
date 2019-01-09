<?php

namespace App\Http\Requests\Sistema\Casas;

use Illuminate\Foundation\Http\FormRequest;

class CasaRequest extends FormRequest
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
          'nome' => 'required|string|min:2',
          'endereco' => 'required|string|min:5',
          'email' => 'required|email',
          'telefone' => 'required|string|min:9',
          'uf' => 'required|string|size:2',
          'cidade' => 'required|string|min:2',
          'cep' => 'sometimes|regex:"^[0-9]{5}-[0-9]{3}$"'
        ];
    }
}
