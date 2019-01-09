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
        @include('sistema.includes.topo-perfil')

        <main class="main-perfil2">
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
                        <div class="u-fs-15 cor-azul-show">PRÉ-EVENTO</div>
                        <div class="font-weight-light u-fs-30 u-c-gs-95"><span class="font-weight-bold">EVENTO DO FREJAT E TITÃS</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>


                        <div class="bg-white sombra-leve u-py-20 u-px-30 u-mb-50 u-c-gs-100 u-fs-18">
                            <div class="row">
                                <div class="col-sm-5 pt-0 pt-sm-3 mb-3 mb-sm-0">
                                    <i class="fas fa-map-marker-alt cor-azul-show u-mr-5"></i> CIDADE: <span class="cor-azul-show">GUARULHOS/SÃO PAULO</span>
                                </div>
                                <div class="col-sm-3 pt-0 pt-sm-3">
                                    <div class="cor-azul-show u-fs-16 u-mb-25 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Aguardando liberação ...</div>
                                </div>
                                <div class="col-sm-4">
                                    <a class="btn-detalhes mb-0" href="#" data-toggle="modal" data-target="#exampleModal">QUERO PARTICIPAR</a>
                                </div>
                            </div>
                        </div>

                        <div class="font-weight-light u-fs-24 u-c-gs-95"><span class="font-weight-bold">COMPARTILHE ESTE EVENTO</span> COM SEUS AMIGOS</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>


                        <div class="row u-mb-25">
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2">
                                <div class="u-fs-18 u-c-gs-95">Compartilhe o link do evento</div>
                            </div>
                            <div class="col-lg-6 mb-3 mb-sm-0">
                                <a href="#" class="d-block td-none transition cor-azul-show-hover u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20">http://escolhaseushow.com.br/evento21</a>
                            </div>
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2 text-right">
                                <a href="#"><i class="transition hover-verde fab fa-facebook-f cor-azul-show u-fs-28 u-mx-20"></i></a>
                                <a href="#"><i class="transition hover-verde fab fa-twitter cor-azul-show u-fs-28 u-mx-20"></i></a>
                                <a href="#"><i class="transition hover-verde fab fa-whatsapp cor-azul-show u-fs-28 u-mx-20"></i></a>
                            </div>
                        </div>

                        <div class="u-h-min-435 vertical-middle-container bg-cover-center" style="background-image: url('{{assets('images/sistema/jorge-mateus.jpg')}}');">
                            <a class="w-100 d-block text-center" href="#"><img src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                        </div>

                        <div class="spacer-middle u-my-50"></div>

                        <div >
                            <div class="u-fs-20 u-c-gs-95">Sobre o Artista</div>
                            <div class="u-fs-16 u-c-gs-130">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non mi finibus, accumsan lectus eget, efficitur nibh. Fusce eu justo sit amet dui vulputate facilisis. Vivamus et finibus justo, et viverra mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sed orci nisi. Nunc enim quam, lacinia sit amet commodo nec, finibus porta erat. Nam auctor consectetur mi, a semper sem ornare eget. Nunc dictum tempor purus eu fermentum. Cras quis tempus tortor, et porttitor sem. Cras pharetra metus diam, eu finibus est tempus eu.
                            </div>
                        </div>

                        <div class="spacer-middle u-my-50"></div>

                        <div class="font-weight-light u-fs-24 u-c-gs-95">VEJA <span class="font-weight-bold">TAMBÉM</span></div>
                        <div class="u-fs-17 u-c-gs-145">Veja abaixo os shows que estão em processo de captação de recuros e contribua!</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-50 u-b-radius-2"></div>

                        <div class="u-mb-100">
                            <?php for($i =0; $i <3;$i++){?>
                            <div class="bg-white sombra-leve u-pt-50 u-pb-25 u-px-30 u-mb-25">
                                <div class="row">
                                    <div class="col-md-2 mb-3 mb-md-0">
                                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                                    </div>
                                    <div class="col-md-6 pl-0 pl-md-3 mb-3 mb-md-0">
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">Guarulhos / São Paulo</div>
                                        <div class="u-fs-20 u-c-gs-95 u-mb-5">Evento do Frejat</div>
                                        <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="cor-azul-show u-fs-16 u-mb-25 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Aguardando liberação ...</div>
                                        <a class="btn-detalhes" href="#">VER DETALHES</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <a href="#" class="fechar-popup" data-dismiss="modal">X</a>

                    <!-- div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div -->
                    <div class="modal-body">
                        <div class="position-relative u-top-minus-25">
                            <div class="u-fs-22 cor-azul-show">Entenda <span class="font-weight-bold">como funciona</span></div>
                            <div class="u-fs-18 u-c-gs-70 u-mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Aenean commodo turpis at orci feugiat, molestie semper lectus suscipit. Pellentesque et eros consectetur, ornare ligula et, semper justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Aenean commodo turpis at orci feugiat, molestie semper lectus suscipit. Pellentesque et eros consectetur, ornare ligula et, semper justo. Aenean commodo turpis at orci feugiat.</div>
                            <div class="text-center">
                                <a class="white-outline-link-primary px-5" href="#">CONFIRMAR PARTICIPAÇÃO</a>
                            </div>

                        </div>


                    </div>
                    <!--div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div-->
                </div>
            </div>
        </div>

    </body>
</html>


