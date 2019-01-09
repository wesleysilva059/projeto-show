@extends('backend.layouts.default')
@section('content')
<section class="content-header">
    <h1>
        Administrativo
        <small>Listagem de Artistas Indicados</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('backend.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Listagem de Artistas Indicados</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Confira abaixo todos os <b>Artistas Indicados</b> !</h3>
                </div>
                <div class="box-body table-responsive">
                    <table class="indicados-table table table-responsive table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Facebook</th>
                                <th>Site</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>E-mail</th>
                              <th>Facebook</th>
                              <th>Site</th>
                              <th>Ações</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{assets('js/backend/artistas.js')}}"></script>
<script>
  $(document).ready(function(){
    tabela = $('.table').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
      },
      "ajax": {
        "url": "{{route('backend.artistas.indicados.get')}}",
        "type": "GET"
      },
      "columns": [
        { "data": "id" },
        { "data": "nome" },
        { "data": "email" },
        { "data": "facebook" },
        { "data": "site" },
        { "data": "acoes" },
      ],
      'paging': true,
      "pageLength": 100,
      'lengthChange': true,
      'searching': true,
      'ordering': true,
      'info': true,
      'autoWidth': false,
      dom: 'lBfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
    $( document ).ajaxComplete(function() {
      $('[data-toggle="tooltip"]').tooltip();
    })

  })
</script>
@endsection