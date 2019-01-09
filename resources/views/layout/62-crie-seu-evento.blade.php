<!doctype html>
<html lang="en">
    <head>
        <title>Escolha Seu Show</title>
        @include('sistema.includes.head')
    </head>
    <body>

        <!-- Menu mobile -->
        @include('sistema.includes.menu-mobile')

        <!-- Topo Perfil -->
        @include('sistema.includes.topo-perfil-produtor')

        <main class="main-perfil">
            <div class="text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit pt-5">
                <div class="row">
                    <div class="col-sm-3 u-pb-30">
                        <!-- Navegação Rápida -->
                        @include('sistema.includes.perfil-menu-lateral')
                        <div class="spacer-heavy u-mt-100 u-mb-30"></div>
                        <!-- Sites Parceiros -->
                        @include('sistema.includes.perfil-sites-parceiros-lateral')
                    </div>
                    <div class="col-sm-9 pl-0 pl-sm-4">                        
                        <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">CRIE O <span class="font-weight-bold">EVENTO DO SEU ARTISTA</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Crie o seu evento preencheno as informações abaixo</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <form id="form-" action="#" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nome_evento" class="input-text" placeholder="Nome do evento"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <input type="text" name="nome_artista" class="input-text" placeholder="Nome do artista"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="data_evento" class="input-text data-input-mask input-calendar" placeholder="Data do evento"/>
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="text" name="data_limite_evento" class="input-text data-input-mask input-calendar" placeholder="Data limite de arrecadação"/>
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="text" name="capacidade_evento" class="input-text" placeholder="Capacidade do evento"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="local_evento" class="input-text" placeholder="Local do evento"/>
                                </div>
                                <div class="col-md-3 pl-0 pl-md-3">
                                    <input type="text" name="cidade_evento" class="input-text" placeholder="Cidade"/>
                                </div>
                                <div class="col-md-1 pl-0 pl-md-3">
                                    <select name="uf_evento" class="input-text">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>                                        
                                    </select>
                                </div>

                            </div>

                            <div class="cor-bg-azul-show u-b-radius-5 py-3 mt-4 mb-5">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="u-fs-36 text-white text-center">Valor do evento</div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="valor_evento" class="input-text mb-0" placeholder="R$" />
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>

                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">TIPOS DE INGRESSO</div>
                            <div class="u-fs-17 u-c-gs-145 u-mb-15">Lorem ipsum dolor sit amet donus ronald mcdonald vs burguer king</div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="nome_ingresso" class="input-text" placeholder="Nome do ingresso" />
                                </div>
                                <div class="col-md-3 pl-0 pl-md-3">
                                    <input type="text" name="qtd_ingresso" class="input-text" placeholder="Qt. do ingresso" />
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="text" name="valor_ingresso" class="input-text" placeholder="Valor do ingresso" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="nome_ingresso" class="input-text" placeholder="Nome do ingresso" />
                                </div>
                                <div class="col-md-3 pl-0 pl-md-3">
                                    <input type="text" name="qtd_ingresso" class="input-text" placeholder="Qt. do ingresso" />
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="text" name="valor_ingresso" class="input-text" placeholder="Valor do ingresso" />
                                </div>
                            </div>

                            <div class="my-5 u-w-170 u-mx-auto u-b-radius-5 cor-bg-azul-show text-center text-white py-2">
                                <div class="u-fs-15">Total geral</div>
                                <div class="u-fs-24">R$ 90,00</div>
                            </div>

                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">FOTOS DOS LOCAIS</div>
                            <div class="u-fs-17 u-c-gs-145 u-mb-15">Lorem ipsum dolor sit amet donus ronald mcdonald vs burguer king</div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="nome_local" class="input-text" placeholder="Nome do local" />
                                </div>
                                <div class="col-md-5 pl-0 pl-md-3">
                                    <div style="overflow: hidden;height:0">
                                        <input type="file" id="file_input_id" name="foto"  class="file_input">   
                                    </div>

                                    <div class="input-text position-relative">
                                        <input type="text" name="foto_name" id="file_fake_id" style="width: 55%;" class="file_fake u-fs-18" placeholder="Foto do local" readonly="readonly">
                                        <input type="button" class="file_btn" onclick="file_upload('file_input_id', 'file_fake_id');" style="width: 40%;" value="Procurar ...">
                                    </div>
                                </div>
                                <div class="col-md-2 pl-0 pl-md-3">
                                    <a href="#" class="text-white u-fs-17 font-weight-bold u-b-radius-5 text-center u-h-50 u-bc-gs-180 vertical-middle-container"><div class="w-100">ENVIAR</div></a>
                                </div>
                            </div>
                            
                            <div class="position-relative clearfix mb-3">
                               <div class="bg-cover-center u-w-170 u-h-140 float-left mr-2 mb-2 u-b-radius-5"  style="background-image: url('{{assets('images/sistema/foto-criar-evento.png')}}')"></div>
                               <a href="#" class="u-w-170 u-h-140 u-bc-gs-240 float-left mr-2 mb-2 u-b-radius-5 vertical-middle-container">
                                   <div class="w-100 text-center"><i class="u-fs-30 u-c-gs-205 fas fa-plus-circle"></i></div>
                               </a>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="nome_local" class="input-text" placeholder="Nome do local 2" />
                                </div>
                                <div class="col-md-5 pl-0 pl-md-3">
                                    <div style="overflow: hidden;height:0">
                                        <input type="file" name="foto" id="file_input_id2" class="file_input">   
                                    </div>

                                    <div class="input-text position-relative">
                                        <input type="text" name="foto_name" id="file_fake_id2" style="width: 55%;" class="file_fake u-fs-18" placeholder="Foto do local" readonly="readonly">
                                        <input type="button" class="file_btn" onclick="file_upload('file_input_id2', 'file_fake_id2');" style="width: 40%;" value="Procurar ...">
                                    </div>
                                </div>
                                <div class="col-md-2 pl-0 pl-md-3">
                                    <a href="#" class="text-white u-fs-17 font-weight-bold u-b-radius-5 text-center u-h-50 u-bc-gs-180 vertical-middle-container"><div class="w-100">ENVIAR</div></a>
                                </div>
                            </div>

                            <div class="text-center u-mb-100 mt-4">
                                <a class="btn-saiba-mais sombra-leve d-inline-block mt-2" href="javascript:;" onclick="$('#form').submit();">CRIAR EVENTO</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>

        <br/><br/><br/>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>


