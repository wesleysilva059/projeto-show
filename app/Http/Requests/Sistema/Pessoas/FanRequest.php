<?php

namespace App\Http\Requests\Pessoas;

use Illuminate\Foundation\Http\FormRequest;

class FanRequest extends FormRequest
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
        'tipo'                  => 'required|integer|min:0|max:2',
        'nome'                  => 'required|string|min:3',
        'email'                 => 'required|email|unique_with:usuarios,usuario,tipo',
        'estilos.0'             => 'required|integer|exists:estilos,id',
        'cep'                   => 'required|string|size:9',
        'logradouro'            => 'required|string|min:10',
        'numero'                => 'required|string|min:1',
        'bairro'                => 'required|string|min:2',
        'cidade'                => 'required|string|min:2',
        'uf'                    => 'required|string|size:2',
        'cc'                    => 'required|string|size:19',
        'titular_cc'            => 'required|string|min:10',
        'mes_cc'                => 'required|digits:2',
        'ano_cc'                => 'required|digits:4',
        'cvc_cc'                => 'required|digits_between:3,4',
        'senha'                 => 'required_without:id|string|min:6|nullable',
        'confirmacao_de_senha'  => 'required_without:id|string|min:6|same:senha|nullable',
      ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
          'email.unique_with' => 'Já existe um cadastro de Fã para este E-mail.',
          'estilos.0.required' => 'Por favor, selecione ao menos 1 estilo!',
          'cep.size' => 'O campo CEP deve conter exatos 9 caracteres!',
          'logradouro.min' => 'O campo Logradouro deve possuir ao menos 10 caracteres!',
          'numero.min' => 'O campo Número deve possuir ao menos 1 caracteres!',
          'bairro.min' => 'O campo Bairro deve possuir ao menos 2 caracteres!',
          'cidade.min' => 'O campo Cidade deve possuir ao menos 2 caracteres!',
          'uf.size' => 'O campo UF deve possuir exatos 2 caracteres!',
          'cc.size' => 'O campo Número do Cartão de Crédito deve possuir exatos 19 caracteres!',
          'titular_cc.min' => 'O campo Titular do Cartão de Crédito deve possuir ao menos 10 caracteres!',
          'mes_cc.digits' => 'O campo Mês de Vencimento do do Cartão de Crédito deve possuir exatos 2 caracteres!',
          'ano_cc.digits' => 'O campo Ano de Vencimento do do Cartão de Crédito deve possuir exatos 4 caracteres!',
          'cvc_cc.digits_between' => 'O campo CVC do Cartão de Crédito deve possuir entre 3 e 4 caracteres!',
          'senha.required' => 'O campo Senha é obrigatório!',
          'senha.min' => 'O campo Senha deve possuir ao menos 6 caracteres!',
          'confirmacao_de_senha.min' => 'O campo de Confirmação de Senha deve possuir ao menos 6 caracteres!',
          'confirmacao_de_senha.same' => 'O campo de Confirmação de Senha é diferente da Senha!',
        ];
    }
}
