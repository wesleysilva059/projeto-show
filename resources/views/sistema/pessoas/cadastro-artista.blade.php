@extends('sistema.layouts.default')
@section('content')
<!-- Menu mobile -->
@include('sistema.includes.menu-mobile')


<section class="banner-sou-artista ui-h-min-500">
    <div class="container-fluid limit">
        <div class="row margin-top-100">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="banner-home-frase ui-pt-50">
                    CPREENCHA O FORMULÁRIO ABAIXO <br/>PARA SE <span class="f-zul-sign">cadastrar</span>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>

<section class="main-perfil pb-5 pt-sm-0 bg-branco-quadriculado" >
    <div class="text-center position-relative seta-baixo-middle mb-5">
        <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
    </div>
    <form class="form-finaliza-cadastro artista" data-action="{{route('sistema.pessoas.finaliza-cadastro-artista')}}">
      <input type="hidden" name="tipo" value="1" class="">
      <div class="container-fluid limit">
        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">01.</strong> INFORMAÇÕES PESSOAIS <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
        <div class="row">
            <div class="col-md-6 pr-0 pr-sm-3">
                <input type="text" class="input-text disabled" name="nome" value="{{$dados->nome}}" readonly placeholder="Nome do artista/banda">
            </div>
            <div class="col-md-6 pr-sm-3">
                <input type="text" class="input-text disabled" name="email" value="{{$dados->email}}" readonly placeholder="E-mail">
            </div>
            <div class="col-md-12 pr-0 pr-sm-3">
                <input type="text" class="input-text responsavel" name="responsavel" placeholder="Responsável" required>
            </div>
        </div>

        <div class="row endereco">
            <div class="col-sm-2 pr-sm-3">
              <input type="text" class="input-text cep-input-mask cep" name="cep" placeholder="CEP" required>
            </div>
            <div class="col-sm-6 pr-sm-3">
              <input type="text" class="input-text disabled logradouro" name="logradouro" placeholder="Logradouro" required>
            </div>
            <div class="col-sm-4 pr-sm-3">
              <input type="text" class="input-text disabled numero" name="numero" placeholder="Número" required>
            </div>
            <div class="col-sm-3 pr-sm-3">
              <input type="text" class="input-text disabled complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="col-sm-5 pr-sm-3">
              <input type="text" class="input-text disabled bairro" name="bairro" placeholder="Bairro" required>
            </div>
            <div class="col-sm-4 pr-sm-3">
              <input type="text" class="input-text disabled localidade" name="cidade" placeholder="Cidade" required>
            </div>
            <div class="col-sm-3 pr-sm-3">
                <select name="uf" id="" class="form-control select2 uf input-text disabled" required>
                    <option value="">UF</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
            </div>
            <div class="col-sm-5 pr-0 pr-sm-3">
              <input type="text" class="input-text telefone telefone-input-mask disabled" name="fixo" placeholder="Telefone Fixo">
            </div>
            <div class="col-sm-4 pr-0 pr-sm-3">
              <input type="text" class="input-text celular telefone-input-mask disabled" name="celular" placeholder="Celular" required>
            </div>
          </div>

        <div class="u-h-1 cinza-traco u-my-25"></div>

        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">02.</strong> SEU ESTILO MUSICAL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
        <div class="row">
            @foreach( $estilos as $estilo )
              <div class="col-2 pr-0">
                <label class="container-check">
                  <input type="checkbox" name="estilos[]" value="{{$estilo->id}}">
                  <span class="check-label">{{$estilo->nome}}</span>
                  <span class="checkmark"></span>
                </label>
              </div>
            @endforeach
        </div>
        <div class="u-h-1 cinza-traco u-my-25"></div>
        
        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">03.</strong> IMAGEM DA BANDA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>

        <div class="row horizontal-center text-center">
          <img id="imagem-img" class="img-responsive img-editor" data-url="{{route('sistema.artistas.upload')}}" class="fr-fil fr-dib" src="{{assets('images/backend/sem-imagem.png')}}" alt="Imagem da Banda"/>
          <input type="hidden" name="imagem" value="" class="url-imagem" id="imagem" required>
        </div>

        <div class="u-h-1 cinza-traco u-my-25"></div>
        
        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">04.</strong> MÍDIAS DA BANDA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
        <textarea name="sobre" class="input-text ui-h-120 pt-2 editor" placeholder="Release / Sobre"></textarea>
        <div class="row margin-top-20">
            <div class="col-md-3">
                <input type="url" class="input-text" name="site" placeholder="Site">
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <input type="url" class="input-text" name="facebook" placeholder="Facebook" required>
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <input type="url" class="input-text" name="instagram" placeholder="Instagram">
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <input type="url" class="input-text" name="youtube" placeholder="Canal no YouTube">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="url" class="input-text" name="spotify" placeholder="Spotify">
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <input type="url" class="input-text" name="soundcloud" placeholder="Soundcloud">
            </div>
            <div class="col-md-6 pl-0 pl-md-3">
                <input type="number" class="input-text mb-1" name="quantidade_minima_fans" placeholder="Quantidade mínima de fãs para o seu evento" required>
                <div class="u-c-gs-145 u-fs-15 u-mb-25">
                    Após a quantidade mínima ser atingida, você será notificado em seu perfil sobre a solicitação do evento e poderá confirmá-lo e cadastrá-lo.
                </div>
            </div>
        </div>
        <div class="u-h-1 cinza-traco u-my-25"></div>
        
        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">05.</strong> DADOS BANCÁRIOS DO RESPONSÁVEL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
        <div class="u-c-gs-145 u-fs-17 u-mb-25">
            Essa será a conta em que o dinheiro arrecadado será depositado para a realização do evento.
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="input-text" name="responsavel_conta" placeholder="Nome do responsável pela conta" required>
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                {!! Form::select('banco', [null => 'Banco'] + $bancos, null, ['class' => 'select2 bancos input-text']) !!}
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <select name="pessoa" class="input-text" onchange="if($(this).val() == 'J'){$('#pj').show();$('#pf').hide();$('#pf').val('');}else{$('#pj').hide();$('#pj').val('');$('#pf').show();} " required>
                    <option value="">Tipo Pessoa</option>
                    <option value="F">Pessoa Física</option>
                    <option value="J">Pessoa Jurídica</option>
                </select>
            </div>
        </div>
        <div class="row u-mb-25">                    
            <div class="col-md-3">
                <input type="text" class="input-text" name="agencia" placeholder="Agência" required>
            </div>
            <div class="col-md-3 pl-0 pl-md-3">
                <input type="text" class="input-text" name="conta" placeholder="Conta Corrente" required>
            </div>
            <div class="col-md-6 pl-0 pl-md-3">
                <div id="pf">
                    <input type="text" class="input-text cpf-input-mask" name="identificador" placeholder="CPF">
                </div>
                <div id="pj" style="display:none;">
                    <input type="text" class="input-text cnpj-input-mask" name="identificador" placeholder="CNPJ">
                </div>
            </div>
        </div>

        <div class="u-h-1 cinza-traco u-my-25"></div>
        <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">06.</strong> CADASTRE SUA SENHA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
        </div>
        <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
            {{--  <div class="u-c-gs-145 u-fs-17 u-mb-25">Abaixo você poderá alterar a senha de acesso da plataforma</div>  --}}
            <div class="row">
              <div class="col-sm-6">
                <input type="password" name="senha" class="input-text" placeholder="Senha" required>
              </div>
              <div class="col-sm-6 pl-0 pl-sm-4">
                <input type="password" name="confirmacao_de_senha" class="input-text" placeholder="Repetir senha" required>
              </div>
            </div>
        
        <div class="text-center u-mb-25">
            <label class="container-check d-inline-block position-relative u-top-minus-7">
                <input type="checkbox" required>
                <span class="check-label"></span>
                <span class="checkmark"></span>
            </label>
            <a target="_blank" class="cor-azul-show u-fs-16" href="#">Aceito e concordo com os termos de política</a>
        </div>

        <div class="text-center">
            <button type="submit" class="section-fase-destaque-btn sombra-leve mb-3">PROSSEGUIR CADASTRO</button>
        </div>
      </form>
    </div>

</section>

<div class="tarja-colorida"></div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/js/languages/pt_br.js?{{rand(0, 99999999999999999)}}"></script>
  <script src="{{assets('js/masks.js')}}"></script>
  <script src="{{assets('js/endereco.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('.responsavel').focus();
    });
  </script>
@endsection
      