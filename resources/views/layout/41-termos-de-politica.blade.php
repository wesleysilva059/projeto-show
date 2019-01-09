<!doctype html>
<html lang="en">
    <head>
        <title>Escolha Seu Show - Sou fan</title>
        @include('sistema.includes.head')
    </head>
    <body>

        <!-- Menu mobile -->
        @include('sistema.includes.menu-mobile')


        <!-- Banner principal da home -->
        <section class="banner-sou-fan bg-cover-center position-relative ui-h-min-500">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">

                    <div class="col-sm-12">
                        <div class="banner-home-frase ui-pt-70">
                            TERMOS DE POLÍTICA<br/>
                            <span class="font-weight-bold">DA PLATAFORMA</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <main class="main-perfil2 u-py-100">
            <div class="container-fluid limit">

                <div class="text-white cor-bg-azul-show u-p-40 u-fs-20">
                    Por favor, leia com atenção os Termos e Condições Gerais do Escolha Seu Show. Se você deseja se tornar um usuário, você deve ler estes Termos e Condições Gerais de Uso e aceitá-los dentro do contexto do processo de registro. Caso contrário, você se compromete a deixar o website.
                </div>
                <div class="u-fs-20 u-c-gs-75 u-bb-gs-200 u-py-40 u-mb-40">Data de vigência: A última atualização deste “Termos e Condições de Uso” foi feita em 13 de janeiro de 2017, data em que entrou em vigência.</div>
                <div class="u-fs-20 u-c-gs-75 u-lh-45 u-mb-40">
                    01. ABRANGÊNCIA E ACEITAÇÃO DAS CONDIÇÕES GERAIS<br/>
                    02. DEFINIÇÕES<br/>
                    03. OBJETO<br/>
                    04. CADASTRAMENTO<br/>
                    05. CRIAÇÃO DA META<br/>
                    06. CONTRIBUIÇÃO<br/>
                    07. CANCELAMENTO, REEMBOLSO E TAXA DE REEMBOLSO
                </div>
                <a onclick="window.print();" href="javascript:;" class="u-b-radius-5 float-right cor-azul-show d-inline-block font-weight-bold u-bc-gs-230 u-fs-17 u-px-30 u-py-15"><i class="fas fa-print cor-azul-show u-fs-17 u-mr-15"></i>Imprimir</a>
                <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">01</div> <div class="u-fs-20 u-c-gs-75 d-inline-block ml-0 ml-md-4">ABRANGÊNCIA E ACEITAÇÃO DAS CONDIÇÕES GERAIS</div>
                <div class="u-fs-17 font-weight-light u-pt-40">
                    <p class="u-mb-40">1.1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue mi eros pharetra augue</p>
                    <p class="u-mb-40">1.2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue mi eros pharetra augue</p>
                    <p class="u-mb-40">1.3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue mi eros pharetra augue</p>
                </div>
            </div>

        </main>



        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

