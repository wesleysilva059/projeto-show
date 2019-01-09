<meta charset="utf-8">
<meta name="_token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@php
    $time = time();
@endphp
<!-- CSS -->
<link rel="stylesheet" href="{{assets('js/sistema/jquery-ui/jquery-ui.min.css')}}" />
<link rel="stylesheet" href="{{assets('js/sistema/jquery-ui/jquery-ui.theme.min.css')}}" />
<link rel="stylesheet" href="{{assets('css/sistema/jquery.fancybox.min.css')}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{assets('css/sistema/hamburgers.min.css')}}">
<link rel="stylesheet" href="{{assets('css/sistema/bootstrap.min.css')}}" >
<link rel="stylesheet" href="{{assets('js/sistema/slick/slick.css')}}">
<link rel="stylesheet" href="{{assets('js/sistema/slick/slick-theme.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="{{assets('css/sistema/utils.css')}}">
<link rel="stylesheet" href="{{assets('css/sistema/utils-important.css')}}">
<link href="{{assets('bower_components/toastr/toastr.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('node_modules/sweetalert2/dist/sweetalert2.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{assets('css/sistema/commom.css?v=')}}{{$time}}">
<link rel="stylesheet" href="{{assets('css/sistema/style.css?v=')}}{{$time}}">
<link rel="stylesheet" href="{{assets('css/sistema/style-mobile.css?v=')}}{{$time}}">

<!-- JS -->
<script src="{{assets('js/sistema/jquery-3.3.1.min.js')}}"></script>
<script src="{{assets('js/sistema/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{assets('js/sistema/jquery.mask.min.js')}}"></script>
<script src="{{assets('js/sistema/jquery.fancybox.min.js')}}"></script>
<script src="{{assets('js/sistema/popper.min.js')}}" ></script>
<script src="{{assets('js/sistema/bootstrap.min.js')}}" ></script>
<script src="{{assets('js/sistema/slick/slick.min.js')}}"></script>
<script src="{{asset('node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script src="{{assets('js/sistema/scripts.js?v=')}}{{$time}}"></script>
<script src="{{assets('bower_components/toastr/toastr.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{assets('js/sistema/app.js?v=')}}{{$time}}"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<script>
  var routes = {
    sistema:{
      pessoas:{
        cadastro: '{{route('sistema.pessoas.cadastro')}}',
        entrar: '{{route('sistema.pessoas.entrar')}}',
      }
    }
  }
</script>