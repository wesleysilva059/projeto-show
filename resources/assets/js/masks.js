$(document).ready(function(){
  var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
      spOptions = {
          onKeyPress: function(val, e, field, options) {
              field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };

  $('.telefone-input-mask').mask(SPMaskBehavior, spOptions);
  //$('.data-input-mask').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.data-input-mask').mask("00/00/0000");
  $('.hora-input-mask').mask('00:00:00');
  $('.data-hora-input-mask').mask('00/00/0000 00:00:00');
  $('.cep-input-mask').mask('00000-000');
  $('.cpf-input-mask').mask('000.000.000-00', {reverse: true});
  $('.cnpj-input-mask').mask('00.000.000/0000-00', {reverse: true});
  $(document).on('keypress', '.dinheiro-input-mask', function(){
    $(this).mask('#.##0,00', {reverse: true});
  });
  $('.credit-input-mask').mask("0000.0000.0000.0000");

  $( ".input-calendar" ).datepicker({
      dateFormat: 'dd/mm/yy',
      dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
      dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
      dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
      monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
      nextText: 'Próximo',
      prevText: 'Anterior'
  });
});