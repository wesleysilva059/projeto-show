$(document).ready(function(){
  $('.cidades, .artistas').change(function(){
    validaEvento();
  });

  $('.form-cria-pre-evento').submit(function(){
    criaPreEvento();
  });

  $('.form-salva-evento').submit(function(){
    submitForm($(this));
    return false;
  });

});

function validaEvento(){
  if( $('.artistas').val() != '' && $('.cidades').val() != '' ){
    consultaEvento($('.artistas').val(), $('.cidades').val())
  }else{
    $('.indique').show();
    $('.confirme').hide();
  }
}

function criaPreEvento(){
  $('body').addClass('load');
}

function consultaEvento($artista, $cidade){
  $.ajax({
    url: routes.sistema.ajax.verifica_evento,
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: {sid: Math.random, a: $artista, c: $cidade},
    success: function (data) {
      $('body').removeClass('load');
      preparaEvento(data);
    },
    beforeSend: function () {
      $('body').addClass('load');
    },
    complete: function () {}
  });
}

function preparaEvento($resp){
  if( $resp == '1' ){
    $('.confirme').show();
    $('.indique').hide();
    $('.nome-cidade').html( $('.cidades').select2('data')[0].text );
    $('.cidade_id').val( $('.cidades').select2('data')[0].id );
    $('.nome-artista').html( $('.artistas').select2('data')[0].text );
    $('.artista_id').val( $('.artistas').select2('data')[0].id );
  }else{
    $('.indique').show();
    $('.confirme').hide();
  }
}