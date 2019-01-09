$(document).ready(function(){
  $('.btn-confirma-participacao-evento').click(function(){
    confirmaParticipacao($(this));
  });

  $('.url-evento').on('click', function(){
    copyUrl($(this));
    return false;
  });

  $(document).on('keypress', '.ingresso-input', function(){
    if( parseFloat($('.valor-evento').val()) < 1 || $('.valor-evento').val() == '' ){
      swal({
        title: 'Ops...',
        text: 'Por favor, preencha o valor do evento primeiro!',
        type: 'error',
      }).then((result) => {
        if( result.value ){
          $('.valor-evento').focus();
        }
      });
    }
  });

  $('.btn-mais-ingresso').on('click', function(){
    $src = $('.ingressos').find('.ingresso').eq(0);
    $src.clone().appendTo('.ingressos');
    $('.ingressos').find('.ingresso').last().find('input').each(function(){
      $(this).val('');
    })
    return false;
  });

  $(document).on('change', '.valor-ingresso', function(){
    $valor = 0;
    $('.valor-ingresso').each(function(){
      $valor += parseFloat($(this).val().replace('.', '').replace(',', '.') * $(this).parents('.ingresso').find('.quantidade-ingresso').val());
    });
    $('.valor-total').html($valor.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL' }));
  });

  $('.form-cadastra-evento').on('submit', function(){
    validaIngressos($(this));
    return false;
  })

});


function confirmaParticipacao($this) {
  swal({
    title: 'Opa!',
    text: 'Confirma a participação neste evento?',
    type: 'question',
    confirmButtonText: "Sim",
    showCancelButton: true,
    cancelButtonText: "Não",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
  }).then((result) => {
    if( result.value ){
      participacaoConfirma($this);
    }
  });
}

function participacaoConfirma($this){
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    success: function (data) {
      $('body').removeClass('load');
      swal({
        title: 'Tudo certo!',
        text: 'Participação confirmada com sucesso!',
        type: 'success',
      }).then((result) => {
        if( result.value ){
          window.location.reload();
        }
      });
    },
    beforeSend: function () {
      $('body').addClass('load');
    },
    complete: function () {}
  });
}

function copyUrl($this){
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($this.text()).select();
  document.execCommand("copy");
  $temp.remove();
}

function validaIngressos($this){
  $valor_evento = parseFloat($('.valor-evento').val().replace('R$ ', '').replace('.', '').replace(',', '.'));
    $valor = 0;
    $('.ingressos').find('.valor-ingresso').each(function(){
      $valor += parseFloat($(this).val().replace('.', '').replace(',', '.') * $(this).parents('.ingresso').find('.quantidade-ingresso').val());
    });
    if( $valor < $valor_evento || $valor < 1){
      swal({
        title: 'Ops...',
        text: 'O valor de todos os ingressos é MENOR que o valor do evento! Por favor, revise os ingressos.',
        type: 'error',
      }).then((result) => {
        if( result.value ){
          $('.valor-evento').focus();
        }
      });
      return false;
    }
    if( $valor > $valor_evento){
      swal({
        title: 'Ops...',
        text: 'O valor de todos os ingressos é MAIOR que o valor do evento! Por favor, revise os ingressos.',
        type: 'error',
      }).then((result) => {
        if( result.value ){
          $('.valor-evento').focus();
        }
      });
      return false;
    }
    confirmaEvento($this);
}

function confirmaEvento($this){
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.find('input,select,textarea').filter(function () { return !!this.value; }).serialize(),
    success: function (data) {
      $('body').removeClass('load');
      swal({
        title: 'Tudo certo!.',
        text: 'O evento foi cadastrado com sucesso! Agora você poderá adicionar algumas imagens do local do evento, editando o evento quando você quiser.',
        type: 'success',
      }).then((result) => {
        if( result.value ){
          window.location.href = $this.data('url');
        }
      });
    },
    beforeSend: function () {
      $('body').addClass('load');
    },
    complete: function () {},
    error: function (data) {
      $('body').removeClass('load');
      Object.keys(data.responseJSON.errors).forEach(function (k) {
        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "showDuration": "1000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr.error(
          data.responseJSON.errors[k],
          'Oops....'
        )
      });
    }
  });
}