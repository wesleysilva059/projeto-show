<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
      <b>ESS</b>
    </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
      Escolha Seu Show
    </span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{assets('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{$user->nome}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{assets('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
              <p>
                {{$user->nome}}
                <small>Cadastrado em {{$user->created_at}}</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                {{--  <a href="#" class="btn btn-default btn-flat">Perfil</a>  --}}
              </div>
              <div class="pull-right">
                <a href="{{route('sair')}}" class="btn btn-default btn-flat">Sair</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{assets('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{$user->nome}}</p>
        <a href="#">
          <i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="@if(route::current()->getName() == 'backend.home') active @endif">
        <a href="{{route('backend.home')}}">
          <i class="fa fa-dashboard"></i>
          <span>Painel Inicial</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="header">
        <b>SITE</b>
      </li>
      <li class="@if(route::current()->getName() == 'index') active @endif">
        <a href="{{route('sistema.index')}}" target="_new">
          <i class="fa fa-sitemap"></i>
          <span>Ver o Site</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="header">
        <b>INSTITUCIONAL</b>
      </li>
      <li class="header">
        <b>SISTEMA</b>
      </li>
      <li class="@if(route::current()->getName() == 'backend.estilos') active @endif">
        <a href="{{route('backend.estilos')}}">
          <i class="fa fa-music"></i>
          <span>Estilos</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="@if(route::current()->getName() == 'backend.fans') active @endif">
        <a href="{{route('backend.fans')}}">
          <i class="fa fa-heart"></i>
          <span>Fãs</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="treeview @if(in_array(Route::current()->getName(),['backend.artistas', 'backend.artistas.indicados'])) active menu-open @endif">
        <a href="#">
          <i class="fa fa-star"></i>
          <span>Artistas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="@if(Route::current()->getName() == 'backend.artistas') active @endif">
            <a href="{{route('backend.artistas')}}">
              <i class="fa fa-thumbs-o-up"></i> Artistas</a>
          </li>
          <li class="@if(Route::current()->getName() == 'backend.artistas.indicados') active @endif">
            <a href="{{route('backend.artistas.indicados')}}">
              <i class="fa fa-hand-o-right"></i> Artistas Indicados</a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>