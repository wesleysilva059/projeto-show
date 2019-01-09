<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <head>
      <title>Escolha Seu Show</title>
      @include('sistema.includes.head')
  </head>
  <body class="@auth('usuarios') logado @endauth">

      <!-- Menu mobile -->
      @include('sistema.includes.menu')
      @include('sistema.includes.menu-mobile')

      @yield('content')        


      @include('sistema.includes.footer')
  </body>
</html>
