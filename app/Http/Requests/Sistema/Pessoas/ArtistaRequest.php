<?php

namespace App\Http\Requests\Sistema\Pessoas;

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
        'tipo'                  => 'required|integer|min:1|max:1',
        'nome'                  => 'required|string|min:3',
        'responsavel'           => 'required|string|min:3',
        'email'                 => 'required|email|unique_with:usuarios,usuario,tipo',
        'cep'                   => 'required|string|size:9',
        'logradouro'            => 'required|string|min:10',
        'numero'                => 'required|string|min:1',
        'bairro'                => 'required|string|min:2',
        'cidade'                => 'required|string|min:2',
        'uf'                    => 'required|string|size:2',
        'celular'               => 'required|string|size:15',
        'estilos.0'             => 'required|integer|exists:estilos,id',
        'imagem'                => 'required|string|min:1',
        'sobre'                 => 'required|string|min:20',
        'site'                  => 'sometimes|url|nullable',
        'facebook'              => 'required|url',
        'instagram'             => 'sometimes|url|nullable',
        'youtube'               => 'sometimes|url|nullable',
        'spotify'               => 'sometimes|url|nullable',
        'soundcloud'            => 'sometimes|url|nullable',
        'quantidade_minima_fans'=> 'required|numeric|min:1',
        'responsavel_conta'     => 'required|string|min:10',
        'banco'                 => 'required|numeric|min:2|exists:bancos,cod',
        'pessoa'                => 'required|in:F,J',
        'agencia'               => 'required|string|min:4',
        'conta'                 => 'required|string|min:6',
        'identificador'         => 'required|string|min:11',
        'senha'                 => 'required|string|min:6',
        'confirmacao_de_senha'  => 'required|string|min:6|same:senha',
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
