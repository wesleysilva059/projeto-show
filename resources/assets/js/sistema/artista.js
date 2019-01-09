$(document).ready(function () {
  $('.form-indique').on('submit', function () {
    indique($(this));
    return false;
  });
});

function indique($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.serialize(),
    success: function (data) {
      $('body').removeClass('load');
      toastr.success(
        'Cadastro realizado com sucesso! Obrigado pela indicação.',
        'Tudo certo!', {
          timeOut: 5000,
          closeButton: true,
          showEasing: 'linear',
          showMethod: 'slideDown',
          closeMethod: 'fadeOut',
          positionClass: "toast-top-full-width",
          closeDuration: 300,
          closeEasing: 'swing',
          closeButton: false,
          progressBar: true,
          onHidden: function () {
            
          }
        }
      );
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
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

function esqueciSenha($this) {
  $('body').addClass('load');
  $.ajax({
    url: $this.data('action'),
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content')
    },
    async: true,
    method: 'POST',
    data: $this.serialize(),
    success: function (data) {
      $('body').removeClass('load');
      if (data == 'OK') {
        window.location.href = routes.ajax.home;
      } else {
        swal({
          title: 'Oops...',
          text: data,
          type: 'error'
        });
      }
    },
    beforeSend: function () {
      $('.loading').addClass('show');
    },
    complete: function () {}
  });
}

