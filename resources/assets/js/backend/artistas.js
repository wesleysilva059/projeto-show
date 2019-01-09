$(document).ready(function () {
  $('body').on('click', '.btn-aprovar', function () {
    console.log('adasd');
    aprovaArtista($(this));
  })

  $('.form-editar-aprovado').on('submit', function () {
    salvaAprovado($(this));
    return false;
  });

  $('#pf').on('ifChecked', function(){
    $('.dados-pj').hide();
    $('.dados-pf').show();
  })

  $('#pj').on('ifChecked', function(){
    $('.dados-pf').hide();
    $('.dados-pj').show();
  })

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $target = e.target.hash.replace('#', '');
    
    if ($target == 'cadastrados') {
      if ($.fn.DataTable.isDataTable('.cadastrados-table')) {
        tabela.destroy();
        tabelaCadastrados();
      } else {
        tabelaCadastrados();
      }
    }
    if ($target == 'apagados') {
      if ($.fn.DataTable.isDataTable('.apagados-table')) {
        tabelaA.destroy();
        tabelaApagados();
      } else {
        tabelaApagados();
      }
    }

  });
})

function tabelaCadastrados() {
  tabela = $('.cadastrados-table').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
    },
    "ajax": {
      "url": routes.backend.artistas.cadastrados,
      "type": "GET"
    },
    "columns": [
      {"data": "id"},
      {"data": "nome"},
      {"data": "email"},
      {"data": "responsavel"},
      {"data": "celular"},
      {"data": "acoes"},
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
}

function tabelaApagados() {
  tabelaA = $('.apagados-table').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
    },
    "ajax": {
      "url": routes.backend.artistas.apagados,
      "type": "GET"
    },
    "columns": [
      {"data": "id"},
      {"data": "nome"},
      {"data": "email"},
      {"data": "deleted_at"},
      {"data": "acoes"},
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
}

function aprovaArtista($this) {
  swal({
    title: 'Opa!',
    text: 'Confirma a aprovação deste artista?',
    type: 'question',
    confirmButtonText: "Sim",
    showCancelButton: true,
    cancelButtonText: "Não",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
  }).then((result) => {
    if( result.value ){
      aprovar($this);
    }
  });
}

function aprovar($this){
  $.ajax({
    url: $this.data('url'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    success: function (data) {
      toastr.clear();
      if( typeof tabela !== 'undefined' ) {
        tabela.ajax.reload();
      }
      if( typeof tabelaA !== 'undefined' ) {
        tabelaA.ajax.reload();
      }
      if (data == 'OK') {
        toastr.success(
          'Artista aprovado com sucesso!',
          'Tudo certo!', {
            timeOut: 2000,
            showEasing: 'linear',
            showMethod: 'slideDown',
            closeMethod: 'fadeOut',
            closeDuration: 300,
            closeEasing: 'swing',
            closeButton: false,
            progressBar: true,
          }
        );
      }else {
        Object.keys(data).forEach(function (k) {
          toastr.error(
            data[k],
            'Oops!', {
              timeOut: 3000,
              showEasing: 'linear',
              showMethod: 'slideDown',
              closeMethod: 'fadeOut',
              closeDuration: 300,
              closeEasing: 'swing',
              closeButton: false,
              progressBar: true,
            }
          )
        });
      }
    },
    beforeSend: function () {
      toastr.info(
        'Estamos processando seu pedido...',
        'Aguarde!', {
          showEasing: 'linear',
          showMethod: 'slideDown',
          closeMethod: 'fadeOut',
          closeDuration: 300,
          closeEasing: 'swing',
          closeButton: false,
          progressBar: true,
        }
      );
    },
    complete: function () {}
  });
}